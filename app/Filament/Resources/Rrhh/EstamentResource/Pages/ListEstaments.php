<?php

namespace App\Filament\Resources\Rrhh\EstamentResource\Pages;

use App\Filament\Resources\Rrhh\EstamentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEstaments extends ListRecords
{
    protected static string $resource = EstamentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
