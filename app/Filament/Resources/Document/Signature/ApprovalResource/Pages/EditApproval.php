<?php

namespace App\Filament\Resources\Document\Signature\ApprovalResource\Pages;

use App\Filament\Resources\Document\Signature\ApprovalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditApproval extends EditRecord
{
    protected static string $resource = ApprovalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
