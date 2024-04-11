<?php

namespace App\Filament\Resources\Rrhh\ProfessionResource\Pages;

use App\Filament\Resources\Rrhh\ProfessionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProfession extends EditRecord
{
    protected static string $resource = ProfessionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
