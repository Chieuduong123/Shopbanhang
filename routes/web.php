<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('AnhDuong', function(){
    return "Hello everyone";
});

Route::get('user/{id}', [UserController::class, 'profile'])->name('profile');

// Route::get('cart', function(){
//     return  view('shoppingcart');
// });
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/product/{id}', [ProductController::class, 'show']);
// Route::get('/cart/staff/{id}', [ProductController::class, 'getListCart']);

 // Route::get('shop', 'App\Http\Controllers\ProductController@currentProduct');
  Route::get('index', 'App\Http\Controllers\ProductController@index')->name('index');
 // Route::get('showdetail', 'App\Http\Controllers\ProductController@showDetail');
//   Route::get('detail/{id}','App\Http\Controllers\ProductController@viewProduct');

Route::get('product/{id}', [ControllersProductController::class, 'showDetail'])->name('detail');

 



//Register --/  Login --/
Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('register', 'App\Http\Controllers\Auth\RegisterController@index');
    Route::post('register', 'App\Http\Controllers\Auth\RegisterController@create');
    Route::get('login', [
        'as' => 'login',
        'uses' => 'App\Http\Controllers\Auth\LoginController@getLogin'
    ]);
    Route::post('/login', [
        'uses' => 'App\Http\Controllers\Auth\LoginController@postLogin',
        'as' => 'login'
    ]);
    Route::get('logout', [ 
        'as' => 'logout', 
        'uses' => 'App\Http\Controllers\Auth\LogoutController@getLogout'
    ]);
});
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
        Route::resource('products', ProductController::class);
        Route::get('users', 'App\Http\Controllers\Admin\UserController@listUsers')->name('users');
        Route::get('orders', 'App\Http\Controllers\Admin\OrderController@listOrders')->name('orders');
        Route::get('/', function () {
            return view('admin.index');
        });
        // Route::get('/create', 'App\Http\Controllers\Admin\ProductController@create');
        
        // Route::post('/create', 'App\Http\Controllers\Admin\ProductController@store');
        // Route::get('/abc',
        //  [
        //     'as' => '/abc',
        //     'uses' => 'App\Http\Controllers\Admin\ProductController@index'
        //  ] );
    // Route::get('/users', function () {
    //     // Matches The "/admin/users" URL
    // });
});

Route::get('/shop', [CartController::class, 'index'])->name('shop'); 
Route::get('cart/show-number', [CartController::class, 'showNumberCart'])->name('show.number.cart');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::delete('cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('order', [OrderController::class, 'order'])->name('order');
Route::get('/info', [Controller::class, 'info'])->name('info'); 
Route::get('/blog', [Controller::class, 'blog'])->name('blog'); 
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/search', [Controller::class, 'search_pro'])->name('search');




    
?>