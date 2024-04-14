<?php

namespace App\Filament\Resources\Document;

use App\Filament\Resources\Document\SignatureRequestResource\Pages;
use App\Filament\Resources\Document\SignatureRequestResource\RelationManagers;
use App\Models\Document\SignatureRequest;
use App\Models\Parameter\Establishment;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SignatureRequestResource extends Resource
{
    protected static ?string $model = SignatureRequest::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                    ->required(),
                Forms\Components\Select::make('type_id')
                    ->relationship('type', 'name')
                    ->required(),
                Forms\Components\FileUpload::make('original_file')
                    ->directory('ionline/signature_requests/original_files')
                    ->required(),
                Forms\Components\FileUpload::make('anexos')
                    ->multiple(),
                Forms\Components\TextInput::make('url')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('status'),
                Forms\Components\TextInput::make('subject')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('recipients')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('distribution')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('reserved')
                    ->required(),
                Forms\Components\Toggle::make('oficial')
                    ->required(),
                Forms\Components\Toggle::make('sensitive')
                    ->required(),
                Forms\Components\TextInput::make('signature_page')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('response_within_days')
                    ->numeric()
                    ->default(null),
                Forms\Components\Select::make('endorse_type_id')
                    ->relationship('endorseType', 'name')
                    ->required(),
                Forms\Components\Repeater::make('approvals')
                    ->schema([
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Forms\Components\Select::make('establishment_id')
                                    ->label('Establecimiento')
                                    ->options(Establishment::whereIn('id', json_decode(env('APP_SS_ESTABLISHMENTS')))->pluck('name', 'id'))
                                    ->default(auth()->user()->organizationalUnit->establishment_id)
                                    ->live(),
                                SelectTree::make('organizational_unit_id')
                                    ->label('Unidad Organizacional')
                                    ->relationship(
                                        relationship: 'organizationalUnit',
                                        titleAttribute: 'name',
                                        parentAttribute: 'organizational_unit_id',
                                        modifyQueryUsing: fn($query, $get) => $query->where('establishment_id', $get('establishment_id'))->orderBy('name'),
                                        modifyChildQueryUsing: fn($query, $get) => $query->where('establishment_id', $get('establishment_id'))->orderBy('name')
                                    )
                                    ->searchable()
                                    ->parentNullValue(null)
                                    ->enableBranchNode()
                                    ->defaultOpenLevel(1)
                                    ->columnSpan(2),
                            ])
                    ])->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('request_date')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('organizationalUnit.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\IconColumn::make('reserved')
                    ->boolean(),
                Tables\Columns\IconColumn::make('oficial')
                    ->boolean(),
                Tables\Columns\IconColumn::make('sensitive')
                    ->boolean(),
                Tables\Columns\TextColumn::make('signature_page')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('response_within_days')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('endorseType.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('verification_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('lastApproval.id')
                    ->numeric()
                    ->sortable(),
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ApprovalsRelationManager::class,
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
}
