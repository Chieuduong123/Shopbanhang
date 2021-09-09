<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Repositories\CartRepository;
use App\Services\CartService;
use App\Services\GetCartByConditionsService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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
        $carts = Carts::select('carts.id','img','name', 'quantity', 'price')->join('products', 'products.id', '=' ,'carts.product_id')->where(['user_id' => Auth::user()->id])->get();
        return view('shoppingcart',compact('carts'));
    }
    
    public function addToCart($id)
    {
        if (Auth::check() && Auth::user()->type == 1 || ! Auth::check()) {
            return redirect('login');
        }
        $cart = app(CartService::class)->handle($id);
        if (!$cart) {
            $cart = [
                "quantity" => 1,
                'user_id' =>  Auth::user()->id,
                'product_id' => $id
            ];
            app(CartRepository::class)->store($cart);
            $cartIds = Carts::where(['user_id' => Auth::user()->id])->pluck('id')->toArray();
            $countCart = count($cartIds);
            return redirect()->back()->with(['countCart' => $countCart]);
        }
        $cart->quantity++;
        $cart->update(['quantity' => $cart->quantity]);
        $cartIds = Carts::where(['user_id' => Auth::user()->id])->pluck('id')->toArray();
         $countCart = count($cartIds);
        return redirect()->back()->with(['countCart' => $countCart]); 
    
    }
     

    /**
     * Write code on MetChod
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
    
        $cart = Carts::findOrFail($id);
        $cart->delete();
            return redirect()->route('cart')->with('success', 'Product removed to cart successfully!');
        
    }

  
}