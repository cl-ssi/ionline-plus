<?php

namespace App\Filament\Resources\Eqm\InfrastructureResource\Pages;

use App\Filament\Resources\Eqm\InfrastructureResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInfrastructures extends ListRecords
{
    protected static string $resource = InfrastructureResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
