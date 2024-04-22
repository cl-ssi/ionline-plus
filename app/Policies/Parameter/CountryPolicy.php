<?php

namespace App\Policies\Parameter;

use App\Models\Parameter\Country;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CountryPolicy
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
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Country $country): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Country $country): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Country $country): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Country $country): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Country $country): bool
    {
        return false;
    }
}
