<?php

namespace App\Policies;

use App\post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function delete(User $user, post $post)
    {
        return  $user->id === $post->user_id;
    }
}
