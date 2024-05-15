<?php

namespace App\Filament\Resources\Parameter\ParameterResource\Pages;

use App\Filament\Resources\Parameter\ParameterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditParameter extends EditRecord
{
    protected static string $resource = ParameterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
