<?php

namespace App\Services;

use App\Models\Carts;
use App\Repositories\ContactRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactService
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function create(array $id)
    {
        return app(ContactRepository::class)->create($id);
    }
}