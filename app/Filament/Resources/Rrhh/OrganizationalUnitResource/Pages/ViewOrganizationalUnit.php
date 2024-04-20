<?php

namespace App\Filament\Resources\Rrhh\OrganizationalUnitResource\Pages;

use App\Filament\Resources\Rrhh\OrganizationalUnitResource;
use Filament\Resources\Pages\ViewRecord;

class ViewOrganizationalUnit extends ViewRecord
{
    protected static string $resource = OrganizationalUnitResource::class;

    protected function getActions(): array
    {
        return [];
    }
}
