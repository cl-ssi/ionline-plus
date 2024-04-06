<?php

namespace App\Filament\Resources\Parameter;

use App\Filament\Resources\Parameter\OrganizationalUnitResource\Pages;
use App\Filament\Resources\Parameter\OrganizationalUnitResource\RelationManagers;
use App\Models\Parameter\OrganizationalUnit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrganizationalUnitResource extends Resource
{
    protected static ?string $model = OrganizationalUnit::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('level')
                    ->numeric()
                    ->default(null),
                Forms\Components\Select::make('organizational_unit_id')
                    ->relationship('organizationalUnit', 'name')
                    ->default(null),
                Forms\Components\Select::make('establishment_id')
                    ->relationship('establishment', 'name')
                    ->default(null),
                Forms\Components\TextInput::make('sirh_function')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sirh_ou_id')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sirh_cost_center')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('level')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('organizationalUnit.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('establishment.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sirh_function')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sirh_ou_id')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sirh_cost_center')
                    ->searchable(),
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
            'index' => Pages\ListOrganizationalUnits::route('/'),
            'create' => Pages\CreateOrganizationalUnit::route('/create'),
            'edit' => Pages\EditOrganizationalUnit::route('/{record}/edit'),
        ];
    }
}
