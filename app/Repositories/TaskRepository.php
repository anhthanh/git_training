<?php

namespace App\Repositories;
use App\User;
/**
 * Created by PhpStorm.
 * User: ky
 * Date: 18/05/2017
 * Time: 13:52
 */
class TaskRepository
{
    public function forUser(User $user)
    {
        return $user->tasks()
            ->orderBy('created_at', 'asc')
            ->get();
    }

}