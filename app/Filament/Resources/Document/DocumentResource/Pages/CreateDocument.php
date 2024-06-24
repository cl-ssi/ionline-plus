<?php

namespace App\Filament\Resources\Document\DocumentResource\Pages;

use App\Filament\Resources\Document\DocumentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDocument extends CreateRecord
{
    protected static string $resource = DocumentResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        $data['organizational_unit_id'] = auth()->user()->organizational_unit_id;
        $data['establishment_id'] = auth()->user()->establishment_id;

        return $data;
    }
}
