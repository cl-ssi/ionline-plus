<?php

namespace App\Filament\Resources\Eqm;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Eqm\Equipment;
use Filament\Tables\Actions\ImportAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Imports\Eqm\IndustrialEquipmentImporter;
use App\Filament\Imports\Eqm\MedicalEquipmentImporter;
use App\Filament\Resources\Eqm\EquipmentResource\Pages;
use App\Filament\Resources\Eqm\EquipmentResource\RelationManagers;

class EquipmentResource extends Resource
{
    protected static ?string $model = Equipment::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Equipamiento';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('place_id')
                    ->relationship('place', 'name'),
                Forms\Components\Select::make('location_id')
                    ->relationship('location', 'name'),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name'),
                Forms\Components\Select::make('subcategory_id')
                    ->relationship('subcategory', 'name'),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('brand_id')
                    ->relationship('brand', 'name'),
                Forms\Components\TextInput::make('model')
                    ->maxLength(255),
                Forms\Components\TextInput::make('serial_number')
                    ->maxLength(255),
                Forms\Components\TextInput::make('inventory_number')
                    ->maxLength(255),
                Forms\Components\TextInput::make('acquisition_year')
                    ->numeric(),
                Forms\Components\TextInput::make('useful_life')
                    ->numeric(),
                Forms\Components\TextInput::make('residual_useful_life')
                    ->numeric(),
                Forms\Components\TextInput::make('property')
                    ->maxLength(255),
                Forms\Components\TextInput::make('condition')
                    ->maxLength(255),
                Forms\Components\TextInput::make('importance')
                    ->maxLength(255),
                Forms\Components\TextInput::make('compilance')
                    ->maxLength(255),
                Forms\Components\TextInput::make('assurance')
                    ->maxLength(255),
                Forms\Components\TextInput::make('warranty_expiry_year')
                    ->maxLength(255),
                Forms\Components\TextInput::make('under_maintenance_plan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('year_entered_maintenance_plan')
                    ->numeric(),
                Forms\Components\TextInput::make('type_of_maintenance')
                    ->maxLength(255),
                Forms\Components\Select::make('supplier_id')
                    ->relationship('supplier', 'name'),
                Forms\Components\TextInput::make('maintenance_reference')
                    ->maxLength(255),
                Forms\Components\TextInput::make('annual_cost')
                    ->numeric(),
                Forms\Components\TextInput::make('annual_maintenance_frequency')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('place.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('location.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('subcategory.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('brand.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('model')
                    ->searchable(),
                Tables\Columns\TextColumn::make('serial_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('inventory_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('acquisition_year')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('useful_life')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('residual_useful_life')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('property')
                    ->searchable(),
                Tables\Columns\TextColumn::make('condition')
                    ->searchable(),
                Tables\Columns\TextColumn::make('importance')
                    ->searchable(),
                Tables\Columns\TextColumn::make('compilance')
                    ->searchable(),
                Tables\Columns\TextColumn::make('assurance')
                    ->searchable(),
                Tables\Columns\TextColumn::make('warranty_expiry_year')
                    ->searchable(),
                Tables\Columns\TextColumn::make('under_maintenance_plan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year_entered_maintenance_plan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type_of_maintenance')
                    ->searchable(),
                Tables\Columns\TextColumn::make('supplier.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('maintenance_reference')
                    ->searchable(),
                Tables\Columns\TextColumn::make('annual_cost')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('annual_maintenance_frequency')
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
                // Agrega tus filtros aquí
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                ImportAction::make('IndustrialEquipmentImporter')
                    ->label('Importar equipamiento industrial')
                    ->importer(IndustrialEquipmentImporter::class),
                ImportAction::make('MedicalEquipmentImporter')
                    ->label('Importar equipamiento médico')
                    ->importer(MedicalEquipmentImporter::class),
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
            // Agrega tus relaciones aquí
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEquipment::route('/'),
            'create' => Pages\CreateEquipment::route('/create'),
            'edit' => Pages\EditEquipment::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): string
    {
        return 'Equipamiento';
    }

    public static function getPluralLabel(): string
    {
        return 'Equipamientos';
    }
}
