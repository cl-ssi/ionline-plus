<?php

namespace App\Filament\Resources\Sgr;

use App\Filament\Resources\Sgr\EventResource\Pages;
use App\Filament\Resources\Sgr\EventResource\RelationManagers;
use App\Models\Sgr\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('body')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\DateTimePicker::make('limit_at'),
                Forms\Components\TextInput::make('from_user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('from_ou_id')
                    ->required()
                    ->numeric()
                    ->default(69),
                Forms\Components\TextInput::make('to_user_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('to_ou_id')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('requirement_id')
                    ->relationship('requirement', 'id')
                    ->required(),
                Forms\Components\Toggle::make('to_authority'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('limit_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('from_user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('from_ou_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('to_user_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('to_ou_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('requirement.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('to_authority')
                    ->boolean(),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}