<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('dv')
                    ->required()
                    ->maxLength(1),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('fathers_family')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mothers_family')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gender')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('commune_id')
                    ->relationship('commune', 'name')
                    ->default(null),
                Forms\Components\TextInput::make('phone_number')
                    ->tel()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('country_id')
                    ->relationship('country', 'name')
                    ->default(null),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('email_personal')
                    ->email()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DateTimePicker::make('email_verified_at'),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DateTimePicker::make('password_changed_at'),
                Forms\Components\TextInput::make('position')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DatePicker::make('birthday'),
                Forms\Components\TextInput::make('vc_link')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('vc_alias')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('organizational_unit_id')
                    ->relationship('organizationalUnit', 'name')
                    ->default(null),
                Forms\Components\Toggle::make('active')
                    ->required(),
                Forms\Components\Toggle::make('gravatar')
                    ->required(),
                Forms\Components\Toggle::make('absent')
                    ->required(),
                Forms\Components\Toggle::make('external')
                    ->required(),
                Forms\Components\Select::make('roles')
                    ->multiple()
                    ->relationship('roles', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dv')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fathers_family')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mothers_family')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('commune.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('country.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_personal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthday')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('vc_link')
                    ->searchable(),
                Tables\Columns\TextColumn::make('vc_alias')
                    ->searchable(),
                Tables\Columns\TextColumn::make('organizationalUnit.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('gravatar')
                    ->boolean(),
                Tables\Columns\IconColumn::make('absent')
                    ->boolean(),
                Tables\Columns\IconColumn::make('external')
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
            RelationManagers\RolesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
