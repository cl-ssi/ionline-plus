<?php

namespace App\Filament\Resources\Document\Signature\ApprovalResource\Pages;

use App\Filament\Resources\Document\Signature\ApprovalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Components\Tab;

class ListApprovals extends ListRecords
{
    protected static string $resource = ApprovalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs['Pendientes'] = 
            Tab::make()->modifyQueryUsing(fn (Builder $query) => 
                $query->where('status',NULL)->where(function ($q) { 
                    $q->whereIn('sent_to_ou_id', auth()->user()->isManagerOf->pluck('id'))
                    ->orWhere('sent_to_user_id',auth()->id()); 
                }
            ));

        $tabs['Revisadas (mías)'] = 
            Tab::make()->modifyQueryUsing(fn (Builder $query) => 
                $query->whereNotNull('status')->where('sent_to_user_id',auth()->id()));

        $manager_of = auth()->user()->isManagerOf;
        foreach($manager_of as $ou) {
            $tabs[$ou->shortName] = 
                Tab::make()->modifyQueryUsing(fn (Builder $query) => 
                    $query->whereNotNull('status')->where('sent_to_ou_id',$ou->id));
        }

        if(auth()->user()->can('be god')) {
            $tabs['Todas las aprobaciones (god)'] = 
                Tab::make()->modifyQueryUsing(fn (Builder $query) => $query);
        }

        return $tabs;
    }
}
