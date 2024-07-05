<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function edit(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }
}
