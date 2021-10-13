<?php

namespace App\Http\Controllers;

use App\Services\CountCartByUserService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
   public function info()
    {
        $countCart = null;
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('information',compact('countCart'));
    }
    
      public function blog()
    {
        $countCart = null;
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('blog',compact('countCart'));
    }

     public function contact()
    {
        $countCart = null;
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
        return view('contact',compact('countCart'));
    }
    public function search_pro(Request $req)
    {
        $countCart = null;
        if (Auth::check() && Auth::user()->type == 2) {
            $countCart = app(CountCartByUserService::class)->handle();
        }
       $pro = Products::where('name','like','%'.$req->key.'%')
                        ->orWhere('price',$req->key)
                        ->get();
                        return view('search',compact('pro','countCart'));
    }
    
  
    
}

