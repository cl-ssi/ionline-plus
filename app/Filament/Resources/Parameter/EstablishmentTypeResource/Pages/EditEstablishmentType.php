<?php

namespace App\Filament\Resources\Parameter\EstablishmentTypeResource\Pages;

use App\Filament\Resources\Parameter\EstablishmentTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEstablishmentType extends EditRecord
{
    protected static string $resource = EstablishmentTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
