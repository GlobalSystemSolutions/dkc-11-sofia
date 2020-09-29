<?php

namespace App\Observers;

use App\Models\User\User;

class UserObserver
{
    public function creating(User $user)
    {
        //$user->slug = str_slug($user->full_name);
    }
}