<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Orders;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Repositories\CartRepository;
use App\Services\CartService;
use App\Services\CountCartByUserService;
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
        $products = Products::orderByDesc('id')->paginate(9);
        $countCart = null;
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('shopproduct', compact('products', 'countCart'));
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


        $totalAll = 0;
        $transport_fee = 30000;
        $discount =0;
        $all_total=0;

        if (Auth::check() && Auth::user()->type == 1 || !Auth::check()) {
            return redirect('login');
        }

        
        $carts = Carts::select('carts.id', 'img', 'name', 'quantity', 'price')
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->where(['user_id' => Auth::user()->id])->get();

        foreach ($carts as $cart) {
            $total = $cart->price * $cart->quantity;
            $infoDetail = [
            'name' => $cart->name,
            'total' => $total,
            'quantity'=> $cart->quantity
        ];
            $totalAll +=  $infoDetail['total'];
            if ($totalAll >2000000) {
                $discount = 150000;
            } elseif ($totalAll >1000000) {
                $discount= 50000;
            } else {
                $discount= 0;
            }
            $all_total = $totalAll - $transport_fee - $discount;
        }
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }


        return view('shoppingcart', compact('carts', 'countCart','totalAll','all_total','discount','transport_fee'));
    }



    public function addToCart(Request $request ,$id)
    {
        if (Auth::check() && Auth::user()->type == 1 || !Auth::check()) {
            return redirect('login');
        }
       
        $cart = app(CartService::class)->handle($id);
        if (!$cart) {
           
           
            $cart = [
              
                // "quantity" => 1,
                'user_id' =>  Auth::user()->id,
                'product_id' => $id,
                'quantity' => $request['quantity']
            ];
            
            app(CartRepository::class)->store($cart);
            $countCart = app(CountCartByUserService::class)->handle();
            return redirect()->back()->with(['countCart' => $countCart]);
        }
        $cart->quantity++;
        $cart->update(['quantity' => $cart->quantity]);
        $countCart = app(CountCartByUserService::class)->handle();
        return redirect()->back()->with(['countCart' => $countCart]);
    }


    /**
     * Write code on MetChod
     *
     * @return response()
     */

    public function update(Request $request)
    {
        if ($request->id && $request->quatity) {

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

    public function detail()
    {
        if (Auth::check() && Auth::user()->type == 1 || !Auth::check()) {
            return redirect('login');
        }
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('detailsorder', compact('countCart'));
    }
}
