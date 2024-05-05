<?php

namespace App\Observers\Document\Signature;

use App\Models\Document\Signature\SignatureRequest;

class SignatureRequestObserver
{
    /**
     * Handle the SignatureRequest "created" event.
     */
    public function created(SignatureRequest $signatureRequest): void
    {
        //
    }

    /**
     * Handle the SignatureRequest "updated" event.
     */
    public function updated(SignatureRequest $signatureRequest): void
    {
        //
    }

    /**
     * Handle the SignatureRequest "deleted" event.
     */
    public function deleted(SignatureRequest $signatureRequest): void
    {
        $signatureRequest->approvals()->delete();
    }

    /**
     * Handle the SignatureRequest "restored" event.
     */
    public function restored(SignatureRequest $signatureRequest): void
    {
        //
    }

    /**
     * Handle the SignatureRequest "force deleted" event.
     */
    public function forceDeleted(SignatureRequest $signatureRequest): void
    {
        //
    }
}
