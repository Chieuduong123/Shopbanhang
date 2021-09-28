<?php

namespace App\Services;

use App\Models\Carts;
use Illuminate\Support\Facades\Auth;

class CountCartByUserService
{
    /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function handle()
    {
        $cartIds = Carts::where(['user_id' => Auth::user()->id])->pluck('id')->toArray();
        return count($cartIds);
    }
}