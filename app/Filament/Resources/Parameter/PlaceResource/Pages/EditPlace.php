<?php

namespace App\Filament\Resources\Parameter\PlaceResource\Pages;

use App\Filament\Resources\Parameter\PlaceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPlace extends EditRecord
{
    protected static string $resource = PlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
