<?php

namespace App\Filament\Resources\Document\SignatureRequestResource\Pages;

use App\Filament\Resources\Document\SignatureRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSignatureRequests extends ListRecords
{
    protected static string $resource = SignatureRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
