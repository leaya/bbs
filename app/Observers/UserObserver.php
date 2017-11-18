<?php

namespace App\Observers;

use App\Models\User;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class UserObserver
{
    public function saving(User $user)
    {
        if (empty($user->avatar)) {
            $user->avatar = 'http://larabbs.app/images/avatars/default.png';
        }
    }

    public function updating(User $user)
    {
        //
    }
}