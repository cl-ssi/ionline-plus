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
use AmidEsfahani\FilamentTinyEditor\TinyEditor;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Documentos';

    protected static ?string $label = 'Documentos';

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
                    ->default(null)
                    ->disabled()
                    ->columnSpan(2),
                Forms\Components\DatePicker::make('date')
                    ->columnSpan(2),
                Forms\Components\Select::make('type_id')
                    ->relationship('type', 'name', function ($query) {
                        return $query->where('doc_digital', true);
                    })
                    ->default(null)
                    ->columnSpan(3),
                Forms\Components\Toggle::make('reserved')
                    ->inline(false)
                    ->columnSpan(1),
                Forms\Components\Textarea::make('antecedent')
                    ->rows(3)
                    ->columnSpan(4),
                Forms\Components\TextInput::make('subject')
                    ->maxLength(255)
                    ->translateLabel()
                    ->default(null)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('from')
                    ->maxLength(255)
                    ->default(null)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('for')
                    ->maxLength(255)
                    ->default(null)
                    ->columnSpanFull(),
                Forms\Components\Radio::make('greater_hierarchy')
                    ->options([
                        'from' => 'De',
                        'for' => 'Para',
                    ])
                    ->inline()
                    ->required()
                    ->columnSpan(6),
                TinyEditor::make('content')
                    // ->fileAttachmentsDisk('public')
                    // ->fileAttachmentsVisibility('public')
                    // ->fileAttachmentsDirectory('uploads')
                    ->profile('ionline')
                    ->columnSpanFull()
                    ->showMenuBar()
                    ->minHeight(940)
                    ->required(),
                // TinyEditor::make('content')
                    // ->profile('ionline')
                    // ->template('example')
                    // ->showMenuBar()
                    // ->translateLabel()
                    // ->required()
                    // ->minHeight(940)
                    // ->columnSpanFull(),
                Forms\Components\Textarea::make('distribution')
                    ->translateLabel()
                    ->rows(5)
                    ->columnSpan(6),
                Forms\Components\Textarea::make('responsible')
                    ->translateLabel()
                    ->rows(5)
                    ->columnSpan(6),
                Forms\Components\FileUpload::make('file')
                    ->translateLabel()
                    ->directory('ionline/documents/documents/')
                    ->deleteUploadedFileUsing(function ($record) {
                        \Illuminate\Support\Facades\Storage::delete($record->file);
                    })
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('internal_number')
                    ->numeric()
                    ->default(null)
                    ->columnSpan(2),
                // Forms\Components\Select::make('user_id')
                //     ->relationship('user', 'full_name')
                //     ->searchable()
                //     ->required(),
                // Forms\Components\Select::make('organizational_unit_id')
                //     ->relationship('organizationalUnit', 'name')
                //     ->required(),
                // Forms\Components\TextInput::make('file_to_sign_id')
                //     ->numeric()
                //     ->default(null),
                // Forms\Components\Select::make('establishment_id')
                //     ->relationship('establishment', 'name')
                //     ->default(null),
                // Forms\Components\TextInput::make('signature_id')
                //     ->numeric()
                //     ->default(null),
            ])
            ->columns(12);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type.name')
                    ->numeric()
                    ->sortable()
                    ->translateLabel(),
                Tables\Columns\TextColumn::make('number')
                    ->translateLabel()
                    ->searchable(),
                // Tables\Columns\TextColumn::make('internal_number')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('date')
                    ->date()
                    ->translateLabel()
                    ->sortable(),
                Tables\Columns\TextColumn::make('antecedent')
                    ->searchable()
                    ->wrap()
                    ->translateLabel(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable()
                    ->wrap()
                    ->translateLabel(),
                Tables\Columns\TextColumn::make('from')
                    ->label('De / Para')
                    ->description(fn (Document $record): string => $record->for?? '', position: 'above')
                    ->wrap()
                    ->searchable(),
                // Tables\Columns\TextColumn::make('for')
                //     ->searchable(),
                Tables\Columns\IconColumn::make('reserved')
                    ->translateLabel()
                    ->boolean(),
                // Tables\Columns\TextColumn::make('greater_hierarchy'),
                // Tables\Columns\TextColumn::make('file')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('user.full_name')
                    ->numeric()
                    ->sortable()
                    ->wrap()
                    ->translateLabel(),
                // Tables\Columns\TextColumn::make('organizationalUnit.name')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('file_to_sign_id')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('establishment.name')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('signature_id')
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc');
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
