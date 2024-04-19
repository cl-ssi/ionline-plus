<?php

namespace App\Filament\Resources\Document\DocumentResource\Pages;

use App\Filament\Resources\Document\DocumentResource;
use Filament\Actions;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListDocuments extends ListRecords
{
    protected static string $resource = DocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'Mis documentos' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('user_id', auth()->id())),
            'Documentos de mi unidad' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('organizational_unit_id', auth()->user()->organizational_unit_id)),
        ];
    }
}
