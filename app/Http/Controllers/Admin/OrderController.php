<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Orders;

// use App\Models\User;

class OrderController extends Controller
{
    

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    
      public function listOrders()
    {
       $orders = Orders::orderByDesc('id')->paginate(5);
       return view('admin.order',compact('orders'));
    }
}