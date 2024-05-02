<?php

namespace App\Filament\Resources\Document\Signature\SignatureRequestResource\Pages;

use App\Filament\Resources\Document\Signature\SignatureRequestResource;
use App\Models\Document\Signature\SignatureRequest;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Request;

class ListSignatureRequests extends ListRecords
{
    protected static string $resource = SignatureRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    // public function boom(Request $request, SignatureRequest $record): void
    // {
    //     $data = $request->arguments->get('otp');
    //     dd($data);
    // }
}
