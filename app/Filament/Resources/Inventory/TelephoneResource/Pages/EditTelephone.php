<?php

namespace App\Filament\Resources\Inventory\TelephoneResource\Pages;

use App\Filament\Resources\Inventory\TelephoneResource;
use App\Models\Inventory\Telephone;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTelephone extends EditRecord
{
    protected static string $resource = TelephoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data, ): array
    {
        $telephone = Telephone::find($data['id']);
        $data['establishment_id'] = $telephone->place->location->establishment->id;
        $data['location_id'] = $telephone->place->location->id;
        return $data;
    }

    // public function mount(Telephone $telephone): void
    // {
    //     // dd($telephone);
    //     // $telephone = Telephone::find($record);
    //     $this->form->fill($telephone->toArray());
    //     // [
    //     //     'establishment_id' => $telephone->place->location->establishment->id,
    //     //     'location_id' => $telephone->place->location->id,
    //     //     'place_id' => $telephone->place->id,
    //     // ]
    // }
}
