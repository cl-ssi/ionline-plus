<?php

namespace App\Filament\Resources\Document;

use App\Filament\Resources\Document\ParteResource\Pages;
use App\Filament\Resources\Document\ParteResource\RelationManagers;
use App\Models\Document\Parte;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class ParteResource extends Resource
{
    protected static ?string $model = Parte::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Documentos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Forms\Components\TextInput::make('correlative')
                //     ->required()
                //     ->disabled()
                //     ->columnSpan(2),
                Forms\Components\DateTimePicker::make('entered_at')
                    ->disabled()
                    ->required()
                    ->columnSpan(3),
                Forms\Components\DatePicker::make('date')
                    ->required()
                    ->columnSpan(2),
                Forms\Components\Select::make('type_id')
                    ->relationship('type', 'name')
                    ->default(null)
                    ->columnSpan(2),
                Forms\Components\TextInput::make('number')
                    ->numeric()
                    ->default(null)
                    ->columnSpan(2),
                Forms\Components\Toggle::make('reserved')
                    ->inline(false)
                    ->columnSpan(1),
                Forms\Components\Toggle::make('important')
                    ->inline(false)
                    ->columnSpan(1),
                Forms\Components\Toggle::make('physical_format')
                    ->inline(false)
                    ->columnSpan(1),
                Forms\Components\TextInput::make('origin')
                    ->maxLength(255)
                    ->default(null)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('subject')
                    ->required()
                    ->columnSpanFull(),
                // Forms\Components\TextInput::make('received_by_id')
                //     ->numeric()
                //     ->default(null),
                // Forms\Components\Select::make('establishment_id')
                //     ->relationship('establishment', 'name')
                //     ->default(null),
                Forms\Components\Repeater::make('files')
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
                    // ->mutateRelationshipDataBeforeSaveUsing(function (array $data): array {
                    //     $data['stored_by_id'] = auth()->id();
                    //     return $data;
                    // })
                    ->defaultItems(1)
                    ->columnSpanFull()
                    ->grid(2),
                // Forms\Components\DateTimePicker::make('reception_date'),
                // Forms\Components\DateTimePicker::make('viewed_at'),
            ])
            ->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('correlative')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('entered_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('type.name')
                    ->numeric()
                    ->sortable(),
                // Tables\Columns\IconColumn::make('reserved')
                //     ->boolean(),
                Tables\Columns\TextColumn::make('date')
                    ->date('Y-m-d')
                    ->sortable(),
                Tables\Columns\TextColumn::make('number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('origin')
                    ->searchable()
                    ->description(fn (Parte $record): string => $record->subject)
                    ->wrap(),
                // Tables\Columns\TextColumn::make('subject')
                //     ->searchable()
                //     ->wrap(),
                // Tables\Columns\IconColumn::make('important')
                //     ->boolean(),
                // Tables\Columns\IconColumn::make('physical_format')
                //     ->boolean(),
                // Tables\Columns\TextColumn::make('received_by_id')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('establishment.name')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('reception_date')
                //     ->dateTime()
                //     ->sortable(),
                // Tables\Columns\IconColumn::make('viewed_at'),
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
            ->defaultSort('correlative', 'desc')
            ->filters([
                //
            ])
            ->modifyQueryUsing(function (Builder $query) {
                $query->where('establishment_id', auth()->user()->establishment_id);
            })
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPartes::route('/'),
            'create' => Pages\CreateParte::route('/create'),
            'edit' => Pages\EditParte::route('/{record}/edit'),
        ];
    }
}
