<?php

namespace App\Filament\Resources\Parameter\EstablishmentTypeResource\Pages;

use App\Filament\Resources\Parameter\EstablishmentTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstablishmentTypes extends ListRecords
{
    protected static string $resource = EstablishmentTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
