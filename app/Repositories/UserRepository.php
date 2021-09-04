<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    /**
     * Create User.
     *
     * @param  array  $param
     * @return void
     */
    public function create(array $param)
    {
        return User::create($param);
    }
}