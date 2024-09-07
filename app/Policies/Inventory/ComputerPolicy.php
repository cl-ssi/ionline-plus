<?php

namespace App\Policies\Inventory;

use App\Models\Inventory\Computer;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ComputerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Computer $computer): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('Resources: create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Computer $computer): bool
    {
        return $user->can('Resources: edit');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Computer $computer): bool
    {
        return $user->can('Resources: delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Computer $computer): bool
    {
        return $user->can('Resources: edit');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Computer $computer): bool
    {
        return true;
    }
}
