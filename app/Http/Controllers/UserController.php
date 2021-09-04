<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Products;
use App\Models\User;
use App\Services\UserService;

// use App\Http\Controllers\Controller;
// use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {
    
       $cart = Products::find(1)->cart;
       return $cart;

    }

       public function show($id)
    {
        return app(UserService::class)->show($id);
        
    }

      public function users()
    {
        $products = User::orderByDesc('id')->paginate(5);
       return view('admin.users',compact('users'));
    }
}