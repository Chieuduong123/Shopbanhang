<?php

namespace App\Services;

use App\Models\Carts;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderService
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function create($request)
    {
        
        $data = $request->all();
        $carts = Carts::select('id')
        ->where(['user_id' => Auth::user()->id])->get();
        $cardIds = [];
        foreach ($carts as $cart) {
            array_push($cardIds,  $cart->id);
        }  
        
        $data['cart_id'] = implode(',', $cardIds);
        DB::beginTransaction();

        try {
            app(OrderRepository::class)->create($data);
            Carts::whereIn('id', $cardIds)->delete();
           DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        
      
    }

}