<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Contacts;
use App\Models\Products;
use App\Services\Admin\ProductService;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    public function index() {
        $conts = Contacts::orderByDesc('id')->paginate(3);
         $products = Products::latest()->paginate(5);
    
        return view('admin.products.index',compact('products', 'conts'));

    }
    public function admin() {
        $conts = Contacts::orderByDesc('id')->paginate(3);
         $products = Products::latest()->paginate(5);
    
        return view('admin.index',compact('products', 'conts'));

    }
    public function create() {
        $conts = Contacts::orderByDesc('id')->paginate(3);
        return view('admin/products/create',compact('conts'));
    }
    public function store(PostProductRequest $request) {
        
        app(ProductService::class)->create($request);
    
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $product)
    {
        $conts = Contacts::orderByDesc('id')->paginate(3);
        return view('admin.products.edit',compact('product', 'conts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Products $product)
    {
        app(ProductService::class)->update($request, $product) ; 
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Products  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
    
  
       
    
}