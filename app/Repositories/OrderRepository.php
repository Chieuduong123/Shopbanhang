<?php

namespace App\Repositories;

use App\Models\Orders;

class OrderRepository
{
    /**
     * Create User.
     *
     * @param  array  $param
     * @return void
     */
    public function create(array $param)
    {
        return Orders::create($param);
    }
}