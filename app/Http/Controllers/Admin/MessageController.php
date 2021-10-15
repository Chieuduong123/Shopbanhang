<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Contacts;

// use App\Models\User;

class MessageController extends Controller
{
    

    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    
      public function listConts()
    {
       $conts = Contacts::orderByDesc('id')->paginate(3);
       return view('admin.nav',compact('conts'));
    }
}