<?php

namespace App\Filament\Resources\Document\Signature;

use App\Filament\Resources\Document\Signature\ApprovalResource\Pages;
use App\Filament\Resources\Document\Signature\ApprovalResource\RelationManagers;
use App\Models\Document\Signature\Approval;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ApprovalResource extends Resource
{
    protected static ?string $model = Approval::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Documentos';

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
                Forms\Components\TextInput::make('module')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('module_icon')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('subject')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('document_route_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('document_route_params')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('document_pdf_path')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Select::make('sent_to_ou_id')
                    ->relationship('sentToOu', 'name')
                    ->default(null),
                Forms\Components\Select::make('sent_to_user_id')
                    ->relationship('sentToUser', 'name')
                    ->default(null),
                Forms\Components\Select::make('approver_ou_id')
                    ->relationship('approverOu', 'name')
                    ->default(null),
                Forms\Components\Select::make('approver_id')
                    ->relationship('approver', 'name')
                    ->default(null),
                Forms\Components\TextInput::make('approver_observation')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\DateTimePicker::make('approver_at'),
                Forms\Components\Toggle::make('status'),
                Forms\Components\TextInput::make('callback_controller_method')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('callback_controller_params')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('callback_feedback_inputs')
                    ->columnSpanFull(),
                Forms\Components\Toggle::make('active')
                    ->required(),
                Forms\Components\Select::make('previous_approval_id')
                    ->relationship('previousApproval', 'id')
                    ->default(null),
                Forms\Components\Toggle::make('digital_signature')
                    ->required(),
                Forms\Components\Toggle::make('endorse')
                    ->required(),
                Forms\Components\TextInput::make('position')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('start_y')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('filename')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('approvable_type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('approvable_id')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('module')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('module_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('subject')
                    ->searchable(),
                Tables\Columns\TextColumn::make('document_route_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('document_route_params')
                    ->searchable(),
                Tables\Columns\TextColumn::make('document_pdf_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sentToOu.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sentToUser.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('approverOu.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('approver.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('approver_observation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('approver_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('callback_controller_method')
                    ->searchable(),
                Tables\Columns\TextColumn::make('callback_controller_params')
                    ->searchable(),
                Tables\Columns\IconColumn::make('active')
                    ->boolean(),
                Tables\Columns\TextColumn::make('previousApproval.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('digital_signature')
                    ->boolean(),
                Tables\Columns\IconColumn::make('endorse')
                    ->boolean(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('start_y')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('filename')
                    ->searchable(),
                Tables\Columns\TextColumn::make('approvable_type')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('approvable_id')
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
            'index' => Pages\ListApprovals::route('/'),
            'create' => Pages\CreateApproval::route('/create'),
            'edit' => Pages\EditApproval::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): string
    {
        return 'Aprobación';
    }

    public static function getPluralLabel(): string
    {
        return 'Aprobaciones';
    }
}
