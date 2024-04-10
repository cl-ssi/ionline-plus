<?php

namespace App\Filament\Resources\Parameter\OrganizationalUnitResource\RelationManagers;

use App\Models\User;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AuthoritiesRelationManager extends RelationManager
{
    protected static string $relationship = 'authorities';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->searchable(['name', 'mothers_family','fathers_family'])
                    ->required()
                    ->getOptionLabelFromRecordUsing(fn (User $record) => "{$record->short_name}"),
                Forms\Components\Select::make('organizational_unit_id')
                    ->relationship('organizationalUnit', 'name')
                    ->default(null),
                Forms\Components\DatePicker::make('date')
                    ->format('m'),
                Forms\Components\TextInput::make('position')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('decree')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('representation_id')
                    ->relationship('representation', 'name')
                    ->searchable(['name', 'mothers_family','fathers_family'])
                    ->default(null)
                    ->getOptionLabelFromRecordUsing(fn (User $record) => "{$record->short_name}"),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('date')
            ->columns([
                Tables\Columns\TextColumn::make('date')
                    ->date('Y-m-d')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.short_name')
                    ->numeric()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('organizationalUnit.name')
                //     ->numeric()
                //     ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('type')
                //     ->searchable(),
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
                Tables\Filters\Filter::make('date')
                    ->form([
                        Forms\Components\TextInput::make('date')
                            ->type('month')
                            ->default(Carbon::now()->startOfMonth()->format('Y-m')),
                    ])
                    ->query(fn (Builder $query, array $data): Builder => $query->whereBetween('date', [Carbon::parse($data['date'])->startOfMonth(),Carbon::parse($data['date'])->endOfMonth()])),
                Tables\Filters\SelectFilter::make('type')
                    ->options([
                        'manager' => 'Jefetura',
                        'delegate' => 'Delegado/a',
                        'secretary' => 'Secretario/a',
                    ])
                    ->default('manager'),

            ], layout: FiltersLayout::AboveContent)
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->paginated(false);
    }
}
