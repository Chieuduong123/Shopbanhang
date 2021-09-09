<?php

namespace App\Repositories;

use App\Models\Carts;
use Illuminate\Support\Facades\Auth;

class CartRepository
{
    /**
     * Get cart by conditions
     *
     * @param  array  $conditions
     * @return \Illuminate\View\View
     */
    public function getCartByCondition($conditions)
    {
        return Carts::where($conditions)->first();
    }
    public function store($data)
    {
        return Carts::create($data);
    }
}