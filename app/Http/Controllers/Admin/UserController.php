<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;


 use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\Contacts;

// use App\Models\User;

class UserController extends Controller
{
    

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    
      public function listUsers()
    {
      $conts = Contacts::orderByDesc('id')->paginate(3);
       $users = User::orderByDesc('id')->paginate(5);
       return view('admin.users',compact('users', 'conts'));
    }
}