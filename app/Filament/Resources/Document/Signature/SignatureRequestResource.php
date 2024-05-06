<?php

namespace App\Filament\Resources\Document\Signature;

use App\Filament\Resources\Document\Signature\SignatureRequestResource\Pages;
use App\Filament\Resources\Document\Signature\SignatureRequestResource\RelationManagers;
use App\Models\Document\Signature\DigitalSignature;
use App\Models\Document\Signature\SignatureRequest;
use App\Models\Parameter\Establishment;
use App\Models\Rrhh\OrganizationalUnit;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class SignatureRequestResource extends Resource
{
    protected static ?string $model = SignatureRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil';

    protected static ?string $navigationGroup = 'Documentos';

    public static function canViewAny(): bool
    {
        return auth()->user()->can([
            'be god',
            'dev',
        ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DateTimePicker::make('request_date')
                    ->required()
                    ->columnSpan(3)
                    ->default(now())
                    ->translateLabel(),
                Forms\Components\Select::make('type_id')
                    ->relationship('type', 'name')
                    ->required()
                    ->columnSpan(3)
                    ->translateLabel(),
                Forms\Components\TextInput::make('subject')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(6)
                    ->translateLabel(),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull()
                    ->translateLabel(),
                Forms\Components\FileUpload::make('original_file_path')
                    ->directory('ionline/signature_requests/original_files')
                    ->storeFileNamesIn('original_file_name')
                    ->required()
                    // ->fetchFileInformation(false)
                    ->columnSpan(6)
                    ->translateLabel(),
                Forms\Components\Repeater::make('files')
                    ->label('Anexos')
                    ->relationship('files')
                    ->schema([
                        Forms\Components\FileUpload::make('storage_path')
                            ->storeFileNamesIn('name')
                            ->directory('ionline/signature_requests/anexos')
                            ->openable()
                            ->fetchFileInformation(false)
                            ->deleteUploadedFileUsing(function (\App\Models\File $record) {
                                Storage::delete($record->storage_path);
                            }),
                    ])
                    ->mutateRelationshipDataBeforeSaveUsing(function (array $data): array {
                        $data['stored_by_id'] = auth()->id();
                        return $data;
                    })
                    ->defaultItems(0)
                    ->columnSpan(6),
                Forms\Components\TextInput::make('url')
                    ->maxLength(255)
                    ->columnSpan(12),
                Forms\Components\Textarea::make('distribution')
                    ->columnSpan(6)
                    ->translateLabel()
                    ->rows(6),
                Forms\Components\Textarea::make('recipients')
                    ->columnSpan(6)
                    ->translateLabel()
                    ->rows(6),
                Forms\Components\Toggle::make('reserved')
                    ->required()
                    ->columnSpan(2)
                    ->translateLabel(),
                Forms\Components\Toggle::make('oficial')
                    ->required()
                    ->columnSpan(2)
                    ->translateLabel(),
                Forms\Components\Toggle::make('sensitive')
                    ->required()
                    ->columnSpan(4)
                    ->translateLabel(),
                Forms\Components\TextInput::make('signature_page')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->columnSpan(2)
                    ->translateLabel(),
                Forms\Components\TextInput::make('response_within_days')
                    ->numeric()
                    ->default(null)
                    ->columnSpan(2)
                    ->translateLabel(),
                Forms\Components\Select::make('endorse_type_id')
                    ->relationship('endorseType', 'name')
                    ->required()
                    ->live()
                    ->columnSpan(4)
                    ->translateLabel(),
                Forms\Components\Repeater::make('visations')
                    ->label('Visaciones')
                    ->relationship('visations')
                    ->schema([
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\Select::make('establishment_id')
                                    ->label('Establecimiento')
                                    ->options(Establishment::whereIn('id', json_decode(env('APP_SS_ESTABLISHMENTS')))->pluck('name', 'id'))
                                    ->default(auth()->user()->establishment_id)
                                    ->live(),
                                SelectTree::make('sent_to_ou_id')
                                    ->label('Unidad Organizacional')
                                    ->relationship(
                                        relationship: 'sentToOu',
                                        titleAttribute: 'name',
                                        parentAttribute: 'organizational_unit_id',
                                        modifyQueryUsing: fn($query, $get) => $query->where('establishment_id', $get('establishment_id'))->orderBy('name'),
                                        modifyChildQueryUsing: fn($query, $get) => $query->where('establishment_id', $get('establishment_id'))->orderBy('name')
                                    )
                                    ->searchable()
                                    ->parentNullValue(null)
                                    ->enableBranchNode()
                                    ->defaultOpenLevel(1)
                                    ->columnSpan(2)
                                    ->live(),
                                Forms\Components\Section::make()
                                    ->description('O enviar a un usuario específico')
                                    ->schema([
                                        Forms\Components\Select::make('sent_to_user_id')
                                            ->relationship('sentToUser', 'full_name')
                                            ->label('Usuario (solo para casos en no sea una jefatura)')
                                            ->searchable()
                                            ->columnSpanFull(),
                                    ])
                                    ->collapsed()
                                    ->compact()
                            ])
                    ])
                    ->itemLabel(fn(array $state): ?string => 'Visador: ' . OrganizationalUnit::find($state['sent_to_ou_id'])?->manager?->short_name ?? null)
                    ->visible(fn(\Filament\Forms\Get $get) => $get('endorse_type_id') == 2 or $get('endorse_type_id') == 3)
                    ->mutateRelationshipDataBeforeFillUsing(function (array $data): array {
                        // TODO: Averiguar si se puede acceder al record, para usar la relacion en vez de hacer la query a OUs
                        $data['establishment_id'] = OrganizationalUnit::find($data['sent_to_ou_id'])?->establishment_id;

                        return $data;
                    })
                    ->mutateRelationshipDataBeforeCreateUsing(function (array $data): array {
                        $data['module']              = 'Signature Request';
                        $data['subject']             = 'Desde solicitud de firma';
                        $data['document_route_name'] = 'route';
                        $data['digital_signature']   = true;
                        $data['endorse']             = true;
                        return $data;
                    })
                    ->maxItems(8)
                    ->defaultItems(1)
                    ->columnSpanFull(),
                Forms\Components\Repeater::make('signatures')
                    ->label('Firmas')
                    ->relationship('signatures')
                    ->schema([
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\Select::make('establishment_id')
                                    ->label('Establecimiento')
                                    ->options(Establishment::whereIn('id', json_decode(env('APP_SS_ESTABLISHMENTS')))->pluck('name', 'id'))
                                    ->default(auth()->user()->establishment_id)
                                    ->live(),
                                SelectTree::make('sent_to_ou_id')
                                    ->label('Unidad Organizacional')
                                    ->relationship(
                                        relationship: 'sentToOu',
                                        titleAttribute: 'name',
                                        parentAttribute: 'organizational_unit_id',
                                        modifyQueryUsing: fn($query, $get) => $query->where('establishment_id', $get('establishment_id'))->orderBy('name'),
                                        modifyChildQueryUsing: fn($query, $get) => $query->where('establishment_id', $get('establishment_id'))->orderBy('name')
                                    )
                                    ->searchable()
                                    ->parentNullValue(null)
                                    ->enableBranchNode()
                                    ->defaultOpenLevel(1)
                                    ->columnSpan(2)
                                    ->live(),
                                Forms\Components\Section::make()
                                    ->description('O enviar a un usuario específico')
                                    ->schema([
                                        Forms\Components\Select::make('sent_to_user_id')
                                            ->relationship('sentToUser', 'full_name')
                                            ->label('Usuario (solo para casos en no sea una jefatura)')
                                            ->searchable()
                                            ->columnSpanFull(),
                                    ])
                                    ->collapsed()
                                    ->compact()
                            ])
                    ])
                    ->itemLabel(fn(array $state): ?string => 'Firmante: ' . OrganizationalUnit::find($state['sent_to_ou_id'])?->manager?->short_name ?? null)
                    ->mutateRelationshipDataBeforeFillUsing(function (array $data): array {
                        // TODO: Averiguar si se puede acceder al record, para usar la relacion en vez de hacer la queery a OUs
                        $data['establishment_id'] = OrganizationalUnit::find($data['sent_to_ou_id'])?->establishment_id;
                        return $data;
                    })
                    ->mutateRelationshipDataBeforeCreateUsing(function (array $data): array {
                        $data['module']              = 'Signature Request';
                        $data['subject']             = 'Desde solicitud de firma';
                        $data['document_route_name'] = 'route';
                        $data['digital_signature']   = true;
                        $data['endorse']             = false;
                        return $data;
                    })
                    ->maxItems(3)
                    ->columnSpanFull()
            ])->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('request_date')
                    ->dateTime('Y-m-d')
                    ->sortable()
                    ->label('F.Solicitud'),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable()
                    ->translateLabel()
                    ->wrap(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->translateLabel()
                    ->wrap(),
                Tables\Columns\TextColumn::make('user.short_name')
                    ->label('Creador')
                    ->numeric()
                    ->sortable()
                    ->translateLabel(),
                Tables\Columns\TextColumn::make('approvals.sentToOu.name')
                    ->label('Firmantes')
                    ->limit(40)
                    ->bulleted(),
                Tables\Columns\IconColumn::make('approvals.icon')
                    ->label('')
                    ->icon(fn (string $state): string => match ($state) {
                        'approved' => 'heroicon-o-check-circle',
                        'rejected' => 'heroicon-o-x-circle',
                        'pending' => 'heroicon-o-clock',
                    })
                    ->color(fn (string $state): string => match ($state) {
                        'approved' => 'success',
                        'rejected' => 'danger',
                        'pending' => 'gray',
                    })
                    ->listWithLineBreaks(),

                // Tables\Columns\TextColumn::make('organizationalUnit.name')
                //     ->numeric()
                //     ->sortable()
                //     ->translateLabel(),
                // Tables\Columns\TextColumn::make('type.name')
                //     ->numeric()
                //     ->sortable()
                //     ->translateLabel()
                //     ->badge(),
                // ->listWithLineBreaks()
                // ->bulleted(),
                // Tables\Columns\IconColumn::make('reserved')
                //     ->boolean()
                //     ->translateLabel(),
                // Tables\Columns\IconColumn::make('oficial')
                //     ->boolean(),
                // Tables\Columns\IconColumn::make('sensitive')
                //     ->boolean()
                //     ->translateLabel(),
                // Tables\Columns\TextColumn::make('signature_page')
                //     ->numeric()
                //     ->sortable()
                //     ->translateLabel(),
                // Tables\Columns\TextColumn::make('response_within_days')
                //     ->numeric()
                //     ->sortable()
                //     ->translateLabel(),
                // Tables\Columns\TextColumn::make('endorseType.name')
                //     ->numeric()
                //     ->sortable()
                //     ->translateLabel(),
                // Tables\Columns\TextColumn::make('verification_code')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('lastApproval.id')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('signature')
                    ->form([
                        Forms\Components\TextInput::make('otp')
                            ->label('OTP')
                            ->numeric()
                            ->required(),
                    ])
                    ->label('Firmar')
                    ->icon('heroicon-o-pencil')
                    // ->color('success')
                    ->action(function (array $data, SignatureRequest $record): void {
                        $digitalSignature = new DigitalSignature();
                        $status = $digitalSignature->signature(
                            auth()->user(), 
                            $data['otp'], 
                            array(Storage::get($record->original_file_path)), 
                            array(['margin-bottom' => 20])
                        );
                
                        if($status == true) {
                            $digitalSignature->storeFirstSignedFile('ionline/signature_requests/signed_files/'.basename($record->original_file_path));
                            $record->update(['status' => true]);
                            Notification::make()
                                ->title('Archivo firmado correctamente')
                                ->success()
                                ->send();
                        }
                        else {
                            Notification::make()
                                ->title($digitalSignature->error)
                                ->danger()
                                ->send();
                        }
                    })
                    ->modalButton('Firmar')
                    ->modalWidth(MaxWidth::SevenExtraLarge)
                    ->modalContent(fn(SignatureRequest $record): View => view('filament.documents.pdf-viewer-modal', [
                        'pdfUrl' => Storage::url($record->original_file_path),
                    ]))
                    ->hidden(fn (SignatureRequest $record): bool => $record->status ?? false),
                Tables\Actions\Action::make('pdf') 
                    ->label('')
                    ->color('success')
                    ->icon('heroicon-o-document')
                    ->url(fn (SignatureRequest $record) => Storage::url('ionline/signature_requests/signed_files/'.basename($record->original_file_path)))
                    ->openUrlInNewTab()
                    ->visible(fn (SignatureRequest $record): bool => $record->status ?? false),
                Tables\Actions\EditAction::make(),
                
            ])
            
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                Tables\Actions\BulkAction::make('Firmar')
                    ->form([
                        Forms\Components\TextInput::make('otp')
                            ->label('OTP')
                            ->numeric()
                            ->required(),
                    ])
                    ->requiresConfirmation()
                    ->icon('heroicon-o-pencil')
                    ->color('success')
                    ->action(fn (array $data, Collection $records) => SignatureRequest::bulkSign($records,$data['otp'])),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // RelationManagers\ApprovalsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSignatureRequests::route('/'),
            'create' => Pages\CreateSignatureRequest::route('/create'),
            'edit'   => Pages\EditSignatureRequest::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): string
    {
        return 'Solicitud de Firma';
    }

    public static function getPluralLabel(): string
    {
        return 'Solicitudes de Firma';
    }

}
