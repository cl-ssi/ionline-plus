<?php

namespace App\Filament\Resources\Document\DocumentResource\Pages;

use App\Filament\Resources\Document\DocumentResource;
use App\Models\Document\Document;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Actions\Action;

class EditDocument extends EditRecord
{
    protected static string $resource = DocumentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('pdf') 
                ->label('PDF')
                ->color('success')
                ->icon('heroicon-o-document')
                ->url(fn (Document $record) => route('document.documents.show', $record))
                ->openUrlInNewTab(), 
            Actions\DeleteAction::make(),
        ];
    }
}
