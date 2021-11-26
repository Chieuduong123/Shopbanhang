<?php

namespace App\Repositories;

use App\Models\Contacts;

class ContactRepository
{
    /**
     * Create User.
     *
     * @param  array  $param
     * @return void
     */
    public function create(array $param)
    {
        return Contacts::create($param);
    }
}