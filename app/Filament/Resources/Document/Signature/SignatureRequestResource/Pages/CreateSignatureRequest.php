<?php

namespace App\Filament\Resources\Document\Signature\SignatureRequestResource\Pages;

use App\Filament\Resources\Document\Signature\SignatureRequestResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSignatureRequest extends CreateRecord
{
    protected static string $resource = SignatureRequestResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        $data['organizational_unit_id'] = auth()->user()->organizational_unit_id;

        return $data;
    }

    protected function afterCreate(): void
    {
        // dd($this->record);
        // dd($this->data);
        $signatureRequest = $this->record;
        $endorseType = $signatureRequest->endorse_type_id;
        $signatures = $signatureRequest->signatures()->orderBy('created_at')->get();
        $visations = $signatureRequest->visations()->orderBy('created_at')->get();
        $previousApproval = null;

        switch ($endorseType) {
            case 1: // No requiere visación
                foreach ($signatures as $index => $signature) {
                    $signature->active = ($index === 0);
                    $signature->previous_approval_id = $previousApproval ? $previousApproval->id : null;
                    $signature->save();
                    $previousApproval = $signature;
                }
                break;
            case 2: // Visación opcional
                foreach ($visations as $index => $visation) {
                    $visation->active = true;
                    $visation->save();
                }
                foreach ($signatures as $index => $signature) {
                    $signature->active = ($index === 0);
                    $signature->previous_approval_id = $previousApproval ? $previousApproval->id : null;
                    $signature->save();
                    $previousApproval = $signature;
                }
                break;
            case 3: // Visación en cadena de responsabilidad
                foreach ($visations as $index => $visation) {
                    $visation->active = ($index === 0);
                    $visation->previous_approval_id = $previousApproval ? $previousApproval->id : null;
                    $visation->save();
                    $previousApproval = $visation;
                }
                foreach ($signatures as $index => $signature) {
                    $signature->active = false;
                    $signature->previous_approval_id = $previousApproval ? $previousApproval->id : null;
                    $signature->save();
                    $previousApproval = $signature;
                }
                break;
        }
    }
}
