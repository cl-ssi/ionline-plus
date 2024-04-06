<?php

namespace App\Filament\Resources\Parameter\HealthServiceResource\Pages;

use App\Filament\Resources\Parameter\HealthServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHealthServices extends ListRecords
{
    protected static string $resource = HealthServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
