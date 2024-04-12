<?php

namespace App\Filament\Resources\Rrhh;

use App\Filament\Resources\Rrhh\OrganizationalUnitResource\Pages;
use App\Filament\Resources\Rrhh\OrganizationalUnitResource\RelationManagers;
use App\Models\Rrhh\OrganizationalUnit;
use App\Models\Parameter\Establishment;
use CodeWithDennis\FilamentSelectTree\SelectTree;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontFamily;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrganizationalUnitResource extends Resource
{
    protected static ?string $model = OrganizationalUnit::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'SDGP';

    public static function canViewAny(): bool
    {
        return auth()->user()->can([
            'be god',
            'dev',
        ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(12)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(11),
                        Forms\Components\TextInput::make('level')
                            ->numeric()
                            ->disabled()
                            ->default(null),
                    ]),
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\Select::make('establishment_id')
                            ->label('Establecimiento')
                            ->options(Establishment::whereIn('id',json_decode(env('APP_SS_ESTABLISHMENTS')))->pluck('name', 'id'))
                            ->default(auth()->user()->organizationalUnit->establishment_id)
                            ->live(),
                        SelectTree::make('organizational_unit_id')
                            ->label('Unidad Organizacional')
                            ->relationship(relationship: 'father', 
                                titleAttribute: 'name', 
                                parentAttribute: 'organizational_unit_id', 
                                modifyQueryUsing: fn($query, $get) => $query->where('establishment_id',$get('establishment_id'))->orderBy('name'),
                                modifyChildQueryUsing: fn($query, $get) => $query->where('establishment_id',$get('establishment_id'))->orderBy('name')
                                )
                            ->searchable()
                            ->parentNullValue(null)
                            ->enableBranchNode()
                            ->defaultOpenLevel(1)
                            ->columnSpan(2),
                    ]),
                Forms\Components\Grid::make(3)
                    ->schema([
                        Forms\Components\TextInput::make('sirh_function')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('sirh_ou_id')
                            ->maxLength(255)
                            ->default(null),
                        Forms\Components\TextInput::make('sirh_cost_center')
                            ->maxLength(255)
                            ->default(null),
                        ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->prefix(fn (OrganizationalUnit $record): string => str_repeat('- ', $record->level))
                    ->searchable()
                    ->fontFamily(FontFamily::Mono),
                // Tables\Columns\TextColumn::make('level')
                //     ->numeric()
                //     ->sortable(),
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
            ->paginated(false);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\UsersRelationManager::class,
            RelationManagers\AuthoritiesRelationManager::class,
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
