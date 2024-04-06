<?php

namespace App\Filament\Resources\Parameter\OrganizationalUnitResource\Pages;

use App\Filament\Resources\Parameter\OrganizationalUnitResource;
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
