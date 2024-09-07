<?php

namespace App\Filament\Resources\Inventory;

use App\Filament\Resources\Inventory\ComputerResource\RelationManagers\UsersRelationManager;
use App\Filament\Resources\Inventory\ComputerResource\Pages;
use App\Models\Inventory\Computer;
use App\Models\Parameter\Establishment;
use App\Models\Parameter\Location;
use App\Models\Parameter\Place;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ComputerResource extends Resource
{
    protected static ?string $model = Computer::class;

    protected static ?string $navigationIcon = 'heroicon-o-computer-desktop';

    protected static ?string $navigationGroup = 'Inventario';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')
                    ->label('Tipo')
                    ->options([
                        'notebook' => 'Notebook',
                        'desktop' => 'Desktop',
                        'all-in-one' => 'All-in-One',
                        'other' => 'Otro'
                    ]),
                Forms\Components\TextInput::make('brand')
                    ->label('Marca')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('model')
                    ->label('Modelo')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('serial')
                    ->label('Numero Serie')
                    ->maxLength(255)
                    ->unique()
                    ->default(null),
                Forms\Components\TextInput::make('hostname')
                    ->label('Dominio')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('domain')
                    ->label('Nombre Equipo')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('ip')
                    ->label('Dirección IP')
                    ->maxLength(45)
                    ->default(null),
                Forms\Components\TextInput::make('mac_address')
                    ->label('MAC')
                    ->unique()
                    ->maxLength(17)
                    ->default(null),
                Forms\Components\TextInput::make('ip_group')
                    ->label('Grupo IP')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('rack')
                    ->label('Rack')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('vlan')
                    ->label('VLAN')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('network_segment')
                    ->label('Segmento de Red')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('operating_system')
                    ->label('Sistema Operativo')
                    ->options([
                        'Windows 11' => 'Windows 11',
                        'Windows 10' => 'Windows 10',
                        'Windows 7' => 'Windows 7',
                        'Linux' => 'Linux',
                        'OSX' => 'OSX'
                    ])
                    ->default(null),
                Forms\Components\TextInput::make('processor')
                    ->label('Procesador')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('ram')
                    ->label('Memoria RAM')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('hard_disk')
                    ->label('Disco Duro')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('inventory_number')
                    ->label('Num Inventario')
                    ->numeric()
                    ->default(null),
                Forms\Components\Select::make('active_type')
                    ->label('Tipo')
                    ->options([
                        'leased' => 'Arrendado',
                        'own' => 'Propio',
                        'user' => 'Usuario',
                    ]),
                Forms\Components\TextInput::make('intesis_id')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('comment')
                    ->label('Comentario')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('status')
                    ->label('Estado')
                    ->label('status')
                    ->options([
                        'active' => 'activo',
                        'inactive' => 'inactivo',
                    ]),
                Forms\Components\TextInput::make('office_serial')
                    ->label('Numero Serie Office')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('windows_serial')
                    ->label('Numero Serie Windows')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('establishment_id')
                    ->label('Establecimiento')
                    ->options(
                        Establishment::whereIn('id', json_decode(env('APP_SS_ESTABLISHMENTS')))
                            ->pluck('name', 'id')
                    )
                    ->live()
                    ->default(38)
                    ->afterStateUpdated(function ($state, $set) {
                        $set('location_id', null);
                        $set('place_id', null);
                    }),
                Forms\Components\Select::make('location_id')
                    ->label('Edificio/Ubicación')
                    ->options(function (Get $get) {
                        if (!$get('establishment_id')) {
                            return [];
                        }
                        return Location::where('establishment_id', $get('establishment_id'))
                            ->orderBy('name')
                            ->pluck('name', 'id');
                    })
                    ->live()
                    ->afterStateUpdated(fn($state, $set) => $set('place_id', null))
                    ->searchable(['name'])
                    ->columnSpan(1),
                Forms\Components\Select::make('place_id')
                    ->relationship('place', 'name')
                    ->label('Lugar/Oficina/Sala/Box')
                    ->searchable(['name'])
                    ->options(function (Get $get) {
                        if (!$get('location_id')) {
                            return [];
                        }
                        return Place::where('location_id', $get('location_id'))
                            ->orderBy('name')
                            ->pluck('name', 'id');
                    })
                    ->columnSpan(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('type')
                    ->searchable()
                    ->label('Tipo')
                    ->sortable(),
                Tables\Columns\TextColumn::make('brand')
                    ->searchable()
                    ->label('Marca')
                    ->sortable(),
                Tables\Columns\TextColumn::make('model')
                    ->searchable()
                    ->label('Modelo'),
                Tables\Columns\TextColumn::make('serial')
                    ->label('Numero Serie')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hostname')
                    ->label('Nombre Equipo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('domain')
                    ->label('Dominio')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('ip')
                    ->label('IP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mac_address')
                    ->label('MAC')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ip_group')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('rack')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('vlan')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('network_segment')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('operating_system')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('processor')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('ram')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('hard_disk')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('inventory_number')
                    ->searchable()
                    ->label('Num Inventario')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('active_type')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('intesis_id')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('comment')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('status')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('office_serial')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('windows_serial')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('place_id')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('inventory_id')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('fusion_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            ->groups([
                'brand',
                'type',
            ]);;
    }

    public static function getRelations(): array
    {
        return [
            UsersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComputers::route('/'),
            'create' => Pages\CreateComputer::route('/create'),
            'edit' => Pages\EditComputer::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): string
    {
        return 'Computador';
    }

    public static function getPluralLabel(): string
    {
        return 'Computadores';
    }
}
