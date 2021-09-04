<?php

namespace App\Repositories;

use App\Models\Products;

class ProductRepository
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return Products::find($id)->first();
    }
}