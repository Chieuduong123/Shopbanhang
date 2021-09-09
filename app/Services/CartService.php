<?php

namespace App\Services;

use App\Models\Products;
use App\Repositories\CartRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Auth;

class CartService
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function handle($id)
    {
        $product = Products::findOrFail($id);
        $conditions = [
            'user_id' =>  Auth::user()->id,
            'product_id' => $id
        ];
        $cart = app(CartRepository::class)->getCartByCondition($conditions);
        return $cart;
  
    }
}