<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = Products::all();
        return view('shopproduct', compact('products'));
    }
    /**
     * Write code on Method
     *
     * @return response()
    {
        $products = Products::all();

        return view('products', compact('products'));
    }* Write code on Method
     *
     * @return response()
     */
    public function cart()
    { 
        return view('shoppingcart');
    }
    
    public function addToCart($id)
    {
        
        $product = Products::findOrFail($id);
        $cart = session()->get('carts', []);
        if(isset($cart[$id])) {
            $cart[$id]['quatity']++;
        }
        dd($cart);
        foreach ($cart as $data) {
            $qty = $data['quatity'];
            Carts::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
                'quality' => $qty
            ]);
        }
        //  session()::forget('carts');
//         $quantity = $qty + 0;
// dd($quantity);
//         if(isset($cart[$id])) {
//             $cart[$id]['quatity']++;
//         } else {
//             $cart[$id] = [
//                 "name" => $product->name,
//                 "quatity" => 1,
//                 "price" => $product->price,
//                 "img" => $product->img
//             ];
//         }
        // session()->put('carts', $cart);
        return redirect()->route('cart')->with('success', 'Product added to cart successfully!');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */

    public function update(Request $request)
    {
        if($request->id && $request->quatity){

            $cart = session()->get('cart');
            $cart[$request->id]["quatity"] = $request->quatity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function destroy($id)
    {
        dd($id);
        $cart = Carts::findOrFail($id);
        dd($cart);
            return redirect()->route('cart')->with('success', 'Product removed to cart successfully!');
        
    }

  
}