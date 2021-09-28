<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequests;
use App\Services\OrderService;

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
        return redirect()->route('shop')
                        ->with('success','Order successfully.');
    }

  
  
}