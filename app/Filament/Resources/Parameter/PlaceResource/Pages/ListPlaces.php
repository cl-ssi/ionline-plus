<?php

namespace App\Filament\Resources\Parameter\PlaceResource\Pages;

use App\Filament\Resources\Parameter\PlaceResource;
use App\Models\Parameter\Establishment;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListPlaces extends ListRecords
{
    protected static string $resource = PlaceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $establishments = Establishment::whereIn('id',json_decode(env('APP_SS_ESTABLISHMENTS')))->get();

        $tabs = [];

        foreach($establishments as $establishment){
            $tabs[$establishment->name] = Tab::make()
                ->label($establishment->name)
                ->modifyQueryUsing(fn(Builder $query) => $query->where('establishment_id', $establishment->id));
        }

        return $tabs;
    }
}
