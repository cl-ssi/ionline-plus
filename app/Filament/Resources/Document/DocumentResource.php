<?php

namespace App\Filament\Resources\Document;

use App\Filament\Resources\Document\DocumentResource\Pages;
use App\Filament\Resources\Document\DocumentResource\RelationManagers;
use App\Models\Document\Document;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                Forms\Components\TextInput::make('number')
                    ->maxLength(50)
                    ->default(null),
                Forms\Components\TextInput::make('internal_number')
                    ->numeric()
                    ->default(null),
                Forms\Components\DatePicker::make('date'),
                Forms\Components\Select::make('type_id')
                    ->relationship('type', 'name', function ($query) {
                        return $query->where('doc_digital', true);
                    })
                    ->default(null),
                Forms\Components\Toggle::make('reserved'),
                Forms\Components\Textarea::make('antecedent')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('responsible')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('subject')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('from')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('for')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('greater_hierarchy')
                    ->required(),
                Forms\Components\Textarea::make('distribution')
                    ->columnSpanFull(),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('file')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'full_name')
                    ->searchable()
                    ->required(),
                Forms\Components\Select::make('organizational_unit_id')
                    ->relationship('organizationalUnit', 'name')
                    ->required(),
                Forms\Components\TextInput::make('file_to_sign_id')
                    ->numeric()
                    ->default(null),
                Forms\Components\Select::make('establishment_id')
                    ->relationship('establishment', 'name')
                    ->default(null),
                Forms\Components\TextInput::make('signature_id')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('internal_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('reserved')
                    ->boolean(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\TextColumn::make('from')
                    ->searchable(),
                Tables\Columns\TextColumn::make('for')
                    ->searchable(),
                Tables\Columns\TextColumn::make('greater_hierarchy'),
                Tables\Columns\TextColumn::make('file')
                    ->searchable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('organizationalUnit.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('file_to_sign_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('establishment.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('signature_id')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
