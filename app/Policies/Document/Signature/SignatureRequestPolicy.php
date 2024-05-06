<?php

namespace App\Policies\Document\Signature;

use App\Models\Document\Signature\SignatureRequest;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class SignatureRequestPolicy
{
    /**
     * Perform pre-authorization checks.
     * For administrative purposes, the user with the 'be god' ability can do anything.
     * If null is returned, the authorization check will fall through to the policy method
     */
    public function before(User $user, string $ability): bool|null
    {
        if ( $user->can('be god') ) {
            return true;
        }

        return null;
    }

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('Documents: signatures and distribution');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, SignatureRequest $signatureRequest): bool
    {
        return $user->id === $signatureRequest->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, SignatureRequest $signatureRequest): bool
    {
        return $user->id === $signatureRequest->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, SignatureRequest $signatureRequest): bool
    {
        return $user->id === $signatureRequest->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, SignatureRequest $signatureRequest): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, SignatureRequest $signatureRequest): bool
    {
        return true;
    }
}
