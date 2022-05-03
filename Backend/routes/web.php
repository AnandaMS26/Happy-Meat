<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

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

// Route::get('/', 'HomeController@index')
//     ->name('homepage');
Route::get('/', function(){
    return view('homepage');
});
Route::get('/aboutus', function(){
    return view('aboutus');
});
// Route::get('/login', function(){
//     return view('login1');
// });
Route::get('/user-login', function(){
    return view('login');
});
Route::get('/user-register', function(){
    return view('register');
});
Route::get('/detail-product', function(){
    return view('detail_produk');
});
Route::get('/my-account', function(){
    return view('myaccount');
});
Route::get('/my-order', function(){
    return view('myorder');
});
Route::get('/detail-order', function(){
    return view('detail_order');
});

Route::get('/detail', 'DetailController@index')
    ->name('detail');
Route::get('/checkout', 'CheckoutController@index')
    ->name('checkout');
Route::get('/checkout/success', 'CheckoutController@index')
    ->name('checkout-success');

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function(){
        Route::get('/', 'App\Http\Controllers\Admin\DashboardController@index')
            ->name('dashboard');
    });
Auth::routes(['verify' => true]);