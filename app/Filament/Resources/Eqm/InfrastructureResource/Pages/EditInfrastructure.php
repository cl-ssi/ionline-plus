<?php

namespace App\Filament\Resources\Eqm\InfrastructureResource\Pages;

use App\Filament\Resources\Eqm\InfrastructureResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInfrastructure extends EditRecord
{
    protected static string $resource = InfrastructureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
