<?php

namespace App\Filament\Resources\Sgr\RequirementResource\Pages;

use App\Filament\Resources\Sgr\RequirementResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRequirement extends CreateRecord
{
    protected static string $resource = RequirementResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['organizational_unit_id'] = auth()->user()->organizational_unit_id;

        return $data;
    }
}
