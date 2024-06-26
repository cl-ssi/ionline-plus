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

    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';

    protected static ?string $navigationGroup = 'SGR';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Textarea::make('subject')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('priority')
                    ->required(),
                Forms\Components\Select::make('event_type_id')
                    ->relationship('eventType', 'name')
                    ->required(),
                Forms\Components\DateTimePicker::make('limit_at'),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('parte_id')
                    ->numeric(),
                Forms\Components\TextInput::make('group_number')
                    ->numeric(),
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->createOptionForm([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\ColorPicker::make('color')
                            ->required(),
                    ]),
                Forms\Components\Fieldset::make('firstEvent')
                    ->relationship('firstEvent')
                    ->schema([
                        Forms\Components\Textarea::make('body'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\IconColumn::make('priority')
                    ->boolean(),
                Tables\Columns\TextColumn::make('eventType.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('limit_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('parte_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('group_number')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.name')
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
                Tables\Actions\ViewAction::make(),
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
            'view' => Pages\ViewRequirement::route('/{record}'),
            'edit' => Pages\EditRequirement::route('/{record}/edit'),
        ];
    }
}
