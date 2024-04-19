<?php

namespace App\Filament\Resources\Sgr;

use App\Filament\Resources\Sgr\RequirementResource\Pages;
use App\Filament\Resources\Sgr\RequirementResource\RelationManagers;
use App\Models\Sgr\Requirement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequirementResource extends Resource
{
    protected static ?string $model = Requirement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('subject')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('priority')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\DateTimePicker::make('limit_at'),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'full_name')
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('parte_id')
                    ->numeric(),
                Forms\Components\TextInput::make('group_number')
                    ->numeric(),
                Forms\Components\Toggle::make('to_authority'),
                Forms\Components\TextInput::make('category_id')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('N°'),
                Tables\Columns\TextColumn::make('subject'),
                Tables\Columns\TextColumn::make('firstEvent.from_user.shortName')
                                        ->label('Creado')
                                        ->description('Creador por', position: 'above'),
                // Tables\Columns\TextColumn::make('lastEvent.status')
                //                         ->label('Último evento')
                //                         ->description('lastEvent.id'),
                // Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('limit_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Fecha límite'),
                // Tables\Columns\TextColumn::make('user.name')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('parte_id')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('group_number')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\IconColumn::make('to_authority')
                //     ->boolean(),
                // Tables\Columns\TextColumn::make('category_id')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('deleted_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListRequirements::route('/'),
            'create' => Pages\CreateRequirement::route('/create'),
            'edit' => Pages\EditRequirement::route('/{record}/edit'),
        ];
    }
}
