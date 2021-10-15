<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequests;
use App\Services\ContactService;
use App\Services\CountCartByUserService;
use Illuminate\Support\Facades\Auth;


// use App\Http\Controllers\Controller;
// use App\Models\User;

class ContactController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function contact(ContactRequests $request)
    {
        if (Auth::check() && Auth::user()->type == 1 || !Auth::check()) {
            return redirect('login');
        }
        $data = [
            'user_id' => (Auth::user()->id),
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message'],
        ];

        $create = app(ContactService::class)->create($data);
        $countCart = null;
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('contact', compact('countCart'));
    }

    public function index()
    {
        $countCart = null;
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('contact', compact('countCart'));
    }
}
