<?php

namespace App\Filament\Resources\Parameter\CountryResource\Pages;

use App\Filament\Resources\Parameter\CountryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCountry extends CreateRecord
{
    protected static string $resource = CountryResource::class;
}
