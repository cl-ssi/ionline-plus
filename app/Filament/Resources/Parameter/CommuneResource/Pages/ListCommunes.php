<?php

namespace App\Filament\Resources\Parameter\CommuneResource\Pages;

use App\Filament\Resources\Parameter\CommuneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommunes extends ListRecords
{
    protected static string $resource = CommuneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
