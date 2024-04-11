<?php

namespace App\Filament\Resources\Rrhh\ProfessionResource\Pages;

use App\Filament\Resources\Rrhh\ProfessionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProfessions extends ListRecords
{
    protected static string $resource = ProfessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
