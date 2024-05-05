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
        $approvals = $signatureRequest->approvals()->orderBy('created_at')->get();
        $previousApproval = null;

        switch ($endorseType) {
            case 1:
                foreach ($approvals as $index => $app) {
                    $app->active = ($index === 0);
                    $app->previous_approval_id = $previousApproval ? $previousApproval->id : null;
                    $app->save();
                    $previousApproval = $app;
                }
                break;
            case 2:
                foreach ($approvals as $index => $app) {
                    if ($app->endorse) {
                        $app->active = true;
                    } else {
                        $app->active = ($index === 0);
                    }
                    $app->previous_approval_id = $previousApproval ? $previousApproval->id : null;
                    $app->save();
                    $previousApproval = $app;
                }
                break;
            case 3:
                foreach ($approvals as $index => $app) {
                    $app->active = ($index === 0);
                    $app->previous_approval_id = $previousApproval ? $previousApproval->id : null;
                    $app->save();
                    $previousApproval = $app;
                }
                break;
        }
    }
}
