<?php

namespace App\Filament\Resources\Rrhh\OrganizationalUnitResource\Pages;

use App\Filament\Resources\Rrhh\OrganizationalUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganizationalUnit extends EditRecord
{
    protected static string $resource = OrganizationalUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
