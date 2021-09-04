<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;


 use App\Http\Controllers\Controller;
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
       $users = User::orderByDesc('id')->paginate(5);
       return view('admin.users',compact('users'));
    }
}