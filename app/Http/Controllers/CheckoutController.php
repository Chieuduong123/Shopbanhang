<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Services\CountCartByUserService;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $infos = [];
        $totalAll = 0;
        $carts = Carts::select('name', 'price', 'quantity')->join('products', 'carts.product_id', '=', 'products.id')
        ->where(['user_id' => Auth::user()->id])->get();
        foreach ($carts as $cart) {
            $total = $cart->price * $cart->quantity;
            $infoDetail = [
                'name' => $cart->name,
                'total' => $total
            ];
            $totalAll +=  $infoDetail['total'];
            $infos[] = $infoDetail;
        }
         $countCart = null;
         if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('checkout',compact('infos', 'totalAll', 'countCart'));
    }

  
  
}