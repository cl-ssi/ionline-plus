<?php

namespace App\Filament\Resources\Rrhh\OrganizationalUnitResource\RelationManagers;

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
                    ->relationship('user', 'full_name')
                    ->searchable()
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
                Forms\Components\Select::make('type')
                    ->options([
                        'manager' => 'Jefetura',
                        'delegate' => 'Delegado/a',
                        'secretary' => 'Secretario/a',
                    ])
                    ->hiddenOn('edit')
                    ->required()
                    ->default(null),
                Forms\Components\TextInput::make('decree')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('representation_id')
                    ->relationship('representation', 'full_name')
                    ->searchable()
                    ->default(null)
                    ->getOptionLabelFromRecordUsing(fn (User $record) => "{$record->short_name}"),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('date')
            ->columns([
                Tables\Columns\Layout\Stack::make([
                    Tables\Columns\TextColumn::make('date')
                        ->date('Y-m-d')
                        ->sortable(),
                    Tables\Columns\TextColumn::make('user.short_name')
                        ->numeric()
                        ->sortable(),
                    Tables\Columns\TextColumn::make('position')
                        ->searchable(),
                ])
            ])
            ->recordClasses(fn ($record) => $record->date->isToday() ? 'border-2 border-primary-600' : '')
            ->contentGrid([
                'md' => 7,
                'xl' => 7,
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
            ])
            ->bulkActions([

            ])
            ->paginated(false);
    }
}
