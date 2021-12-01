<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequests;
use App\Models\Products;
use App\Services\CountCartByUserService;
use App\Services\OrderService;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $request
     * @return \Illuminate\View\View
     */
    public function order(OrderRequests $request)
    {
        app(OrderService::class)->create($request);
        return redirect()->route('details')
                        ->with('success','Order successfully.');
    }

    public function canYouLike()
    {
        $products = Products::orderByDesc('id')->paginate(4);
        $countCart = null;
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('detailsorder',compact('products','countCart'));
    }

  
  
}