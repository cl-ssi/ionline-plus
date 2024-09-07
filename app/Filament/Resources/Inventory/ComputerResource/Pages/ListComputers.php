<?php

namespace App\Filament\Resources\Inventory\ComputerResource\Pages;

use App\Filament\Resources\Inventory\ComputerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListComputers extends ListRecords
{
    protected static string $resource = ComputerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
