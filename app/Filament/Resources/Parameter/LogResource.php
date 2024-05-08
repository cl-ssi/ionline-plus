<?php

namespace App\Filament\Resources\Parameter;

use App\Filament\Resources\Parameter\LogResource\Pages;
use App\Filament\Resources\Parameter\LogResource\RelationManagers;
use App\Models\Parameter\Log;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LogResource extends Resource
{
    protected static ?string $model = Log::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Desarrollador';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->disabled(),
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('module')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('uri')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('formatted')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('context')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('level')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('level_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('channel')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('extra')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('remote_addr')
                    ->maxLength(255)
                    ->disabled(),
                Forms\Components\TextInput::make('user_agent')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('record_datetime')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.short_name')
                    ->wrap()
                    ->sortable(),
                Tables\Columns\TextColumn::make('module')
                    ->searchable(),
                Tables\Columns\TextColumn::make('uri')
                    ->searchable()
                    ->wrap()
                    ->description(fn (Log $record): string => $record->message),
                // Tables\Columns\TextColumn::make('level')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('level_name')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('channel')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('remote_addr')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('user_agent')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('record_datetime')
                    ->label('Fecha Regist.')
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->paginated(50)
            ->defaultSort('id','desc')
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
            'index' => Pages\ListLogs::route('/'),
            'create' => Pages\CreateLog::route('/create'),
            'edit' => Pages\EditLog::route('/{record}/edit'),
        ];
    }
}
