<?php

namespace App\Filament\Resources\Inventory;

use App\Filament\Resources\Inventory\TelephoneResource\Pages;
use App\Filament\Resources\Inventory\TelephoneResource\RelationManagers;
use App\Models\Inventory\Telephone;
use App\Models\Parameter\Establishment;
use App\Models\Parameter\Location;
use App\Models\Parameter\Place;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TelephoneResource extends Resource
{
    protected static ?string $model = Telephone::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('minsal')
                    ->required()
                    ->numeric()
                    ->columnSpan(1),
                Forms\Components\TextInput::make('number')
                    ->required()
                    ->numeric()
                    ->columnSpan(1),
                Forms\Components\TextInput::make('mac')
                    ->maxLength(17)
                    ->default(null)
                    ->columnSpan(1),
                Forms\Components\Select::make('establishment_id')
                    // ->relationship('place.location.establishment', 'establishment_id')
                    ->label('Establecimiento')
                    ->options(Establishment::whereIn('id', json_decode(env('APP_SS_ESTABLISHMENTS')))->pluck('name', 'id'))
                    ->live()
                    ->default(38)
                    ->columnSpanFull(),
                Forms\Components\Select::make('location_id')
                    // ->relationship('place.location', 'name')
                    ->label('Edificio/Ubicación')
                    ->options(fn (Get $get) => Location::where('establishment_id', $get('establishment_id'))->orderBy('name')->pluck('name', 'id'))
                    ->live()
                    ->default(20)
                    // ->default(fn (Get $get) => Place::find($get('place_id')->location->id))
                    ->columnSpan(1),
                Forms\Components\Select::make('place_id')
                    ->relationship('place','name')
                    ->label('Lugar/Oficina/Sala/Box')
                    // ->options(fn (Get $get) => Place::where('location_id', $get('location_id'))->orderBy('name')->pluck('name', 'id'))
                    ->default(null)
                    ->live()
                    ->columnSpan(1),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('minsal')
                    ->numeric()
                    ->searchable()
                    ->sortable()
                    ->formatStateUsing(function (string $state) {
                        if (strlen($state) < 6) {
                            return $state;
                        }
                        return substr($state, 0, 2) . ' ' . substr($state, 2);
                    }),
                Tables\Columns\TextColumn::make('number')
                    ->numeric()
                    ->sortable()
                    ->formatStateUsing(function (string $state) {
                        if (strlen($state) < 9) {
                            return $state; 
                        }
                        return substr($state, 0, 2) . ' ' . substr($state, 2, 3) . ' ' . substr($state, 5);
                    }),
                Tables\Columns\TextColumn::make('users.full_name')
                    ->label('Usuarios')
                    ->searchable()
                    ->sortable()
                    ->limit(40)
                    ->bulleted(),
                Tables\Columns\TextColumn::make('place.location.establishment.name')
                    ->searchable()
                    ->translateLabel()
                    ->sortable(),
                Tables\Columns\TextColumn::make('place.name')
                    ->searchable()
                    ->translateLabel()
                    ->sortable(),
                Tables\Columns\TextColumn::make('place.location.name')
                    ->searchable()
                    ->translateLabel()
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
            ->defaultSort('number', 'asc');
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\UsersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTelephones::route('/'),
            'create' => Pages\CreateTelephone::route('/create'),
            'edit' => Pages\EditTelephone::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): string
    {
        return 'Teléfono';
    }

    public static function getPluralLabel(): string
    {
        return 'Teléfonos';
    }
}
