<?php

namespace App\Filament\Resources\Parameter\OrganizationalUnitResource\Pages;

use App\Filament\Resources\Parameter\OrganizationalUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganizationalUnits extends ListRecords
{
    protected static string $resource = OrganizationalUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
