<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return app(ProductRepository::class)->show($id);
    }
}