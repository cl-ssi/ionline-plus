<?php

namespace App\Filament\Resources\Rrhh\OrganizationalUnitResource\Pages;

use App\Filament\Resources\Rrhh\OrganizationalUnitResource;
use App\Models\Rrhh\OrganizationalUnit;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;

class ViewOrganizationalUnit extends ViewRecord
{
    protected static string $resource = OrganizationalUnitResource::class;

    // public function getTitle(): string | Htmlable
    // {
    //     /** @var OrganizationalUnit */
    //     $record = $this->getRecord();

    //     return $record->currentManager->full_name;
    // }

    protected function getActions(): array
    {
        return [];
    }
}
