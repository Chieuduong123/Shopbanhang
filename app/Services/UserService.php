<?php

namespace App\Services;


use App\Repositories\Admin\UserRepository;


class UserService
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function create(array $id)
    {
        return app(UserRepository::class)->create($id);
    }
}