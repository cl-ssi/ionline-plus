<?php

namespace App\Filament\Resources\Document\Signature\ApprovalResource\Pages;

use App\Filament\Resources\Document\Signature\ApprovalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListApprovals extends ListRecords
{
    protected static string $resource = ApprovalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
