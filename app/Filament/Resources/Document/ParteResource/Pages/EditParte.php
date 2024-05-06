<?php

namespace App\Filament\Resources\Document\ParteResource\Pages;

use App\Filament\Resources\Document\ParteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParte extends EditRecord
{
    protected static string $resource = ParteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
