<?php

namespace App\Repositories;

use App\Models\Contacts;
use App\Models\Orders;

class ContactRepository
{
    /**
     * Create User.
     *
     * @param  array  $param
     * @return void
     */
    public function getContCondition($conditions)
    {
        return Contacts::where($conditions)->first();
    }
    public function create(array $param)
    {
        return Contacts::create($param);
    }
}