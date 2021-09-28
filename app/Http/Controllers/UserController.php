<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Products;
use App\Models\User;
use App\Services\CountCartByUserService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

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
    
      public function profile($id)
    {
          $user = User::findOrFail($id);
          $countCart = null;
          if (Auth::check() && Auth::user()->type == 2) {
          $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('profile',compact('user','countCart'));
    }
}