<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Desarrollador';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')
                    ->directory('ionline/news')
                    ->image() // restringe que sea solo de tipo imagen
                    ->required()
                    ->helperText('IMPORTANTE: Tamaño de la imagen 766x400'),
                Forms\Components\Select::make('type')
                    ->options([
                        'news' => 'News',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->default(null)
                    ->required(),
                Forms\Components\DateTimePicker::make('until_at'),
                // Forms\Components\TextInput::make('subtitle')
                //     ->maxLength(255)
                //     ->default(null)
                //     ->columnSpanFull(),
                // Forms\Components\Textarea::make('lead')
                //     ->columnSpanFull(),
                Forms\Components\Textarea::make('body')
                    ->columnSpanFull()
                    ->rows(6),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('publication_date_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->wrap()
                    ->searchable(),
                // Tables\Columns\TextColumn::make('body')
                //     ->wrap()
                //     ->searchable(),
                Tables\Columns\TextColumn::make('until_at')
                    ->dateTime('Y-m-d H:i')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.shortName')
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
            ])
            ->defaultSort('id','desc');
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): string
    {
        return 'Noticia';
    }

    public static function getPluralLabel(): string
    {
        return 'Noticias';
    }
}
