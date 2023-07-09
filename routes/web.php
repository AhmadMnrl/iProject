<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layouts-admin.master');
// });


Route::group(['middleware' => ['auth', 'checkRole:admin']],function(){
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/products',[ProductsController::class,'index'])->name('products');
    Route::post('/products/store',[ProductsController::class,'store'])->name('products.store');


});
Route::get('/login',[AuthController::class,'getLogin'])->name('login');
Route::post('/postlogin',[AuthController::class,'postLogin'])->name('postlogin');
Route::get('/register',[AuthController::class,'getRegister'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

// Front 
Route::get('/', function () {
    return view('front.home');
});
Route::get('/produk', function () {
    return view('front.produk');
});
Route::get('/produk-detail', function () {
    return view('front.produk-detail');
});
Route::get('/cart', function () {
    return view('front.cart');
});
