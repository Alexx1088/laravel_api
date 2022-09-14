<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BlogRepositoryInterface;

use App\Models\User;

class BlogRepository implements BlogRepositoryInterface
{
    public function all()
    {
    	$users = User::query();

    	$users = $users->get();

        return $users;
    }

    public function getByUser(User $user)
    {
        return $user;
    }
}