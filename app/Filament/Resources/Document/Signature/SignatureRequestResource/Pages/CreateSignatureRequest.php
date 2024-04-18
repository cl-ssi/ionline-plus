<?php

namespace App\Filament\Resources\Document\Signature\SignatureRequestResource\Pages;

use App\Filament\Resources\Document\Signature\SignatureRequestResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSignatureRequest extends CreateRecord
{
    protected static string $resource = SignatureRequestResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        $data['organizational_unit_id'] = auth()->user()->organizational_unit_id;

        return $data;
    }

    protected function afterCreate(): void
    {
        // dd($this->record);
        // dd($this->data);
    }
}
