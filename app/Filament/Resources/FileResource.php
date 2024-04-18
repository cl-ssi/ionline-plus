<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FileResource\Pages;
use App\Filament\Resources\FileResource\RelationManagers;
use App\Models\Document\Signature\SignatureRequest;
use App\Models\File;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class FileResource extends Resource
{
    protected static ?string $model = File::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Desarrollador';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('storage_path')
                    ->storeFileNamesIn('name')
                    ->directory('ionline/files')
                    ->openable()
                    ->required()
                    ->visibility('private')
                    ->deleteUploadedFileUsing(function (File $record) {
                        Storage::delete($record->storage_path);
                    }),
                Forms\Components\Toggle::make('stored')
                    ->required(),
                // Forms\Components\TextInput::make('name')
                //     ->maxLength(255)
                //     ->default(null),
                Forms\Components\TextInput::make('type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('input_title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('input_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('required')
                    ->required(),
                Forms\Components\TextInput::make('valid_types')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('max_file_size')
                    ->numeric()
                    ->default(null),
                Forms\Components\Select::make('stored_by_id')
                    ->relationship('storedBy', 'full_name')
                    ->searchable()
                    ->default(null),
                Forms\Components\MorphToSelect::make('fileable')
                    ->types([
                        Forms\Components\MorphToSelect\Type::make(SignatureRequest::class)
                            ->titleAttribute('subject'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('storage_path')
                    ->formatStateUsing(fn ($record) => $record->name)
                    ->url(fn ($record) => Storage::url($record->storage_path), true)
                    ->icon('heroicon-o-document'),
                Tables\Columns\IconColumn::make('stored')
                    ->boolean(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('input_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('input_name')
                    ->searchable(),
                Tables\Columns\IconColumn::make('required')
                    ->boolean(),
                Tables\Columns\TextColumn::make('valid_types')
                    ->searchable(),
                Tables\Columns\TextColumn::make('max_file_size')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('storedBy.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fileable_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fileable_id')
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
            ->defaultSort('id', 'desc')
            ->filters([
                Tables\Filters\Filter::make('fileable_type_null')
                    ->query(fn (Builder $query) => $query->whereNull('fileable_type')),
                Tables\Filters\SelectFilter::make('filable_type')
                    ->options([
                        'draft'     => 'Draft',
                        'reviewing' => 'Reviewing',
                        'published' => 'Published',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // Tables\Actions\LinkAction::make('download')
                //     ->label('Download')
                //     ->url(fn ($record) => Storage::url($record->storage_path))
                //     ->icon('heroicon-o-document')
                //     ->openUrlInNewTab(),
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
            'index'  => Pages\ListFiles::route('/'),
            'create' => Pages\CreateFile::route('/create'),
            'edit'   => Pages\EditFile::route('/{record}/edit'),
        ];
    }
}
