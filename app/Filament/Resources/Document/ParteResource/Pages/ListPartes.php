<?php

namespace App\Filament\Resources\Document\ParteResource\Pages;

use App\Filament\Resources\Document\ParteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartes extends ListRecords
{
    protected static string $resource = ParteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
