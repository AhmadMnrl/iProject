<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomersController;

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
    Route::group(['prefix'=>'admin'],function(){
      Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
      
        Route::group(['prefix'=>'products','as'=>'products.'],function(){
            Route::get('/',[ProductsController::class,'index'])->name('index');
            Route::get('/edit/{id}',[ProductsController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[ProductsController::class,'update'])->name('update');
            Route::post('/',[ProductsController::class,'store'])->name('store');
            Route::get('/destroy/{id}',[ProductsController::class,'destroy'])->name('destroy');
        });
        
        Route::group(['prefix'=>'customers','as'=>'customers.'],function(){
            Route::get('/',[CustomersController::class,'index'])->name('index');
            Route::get('/edit/{id}',[CustomersController::class,'edit'])->name('edit');
            Route::put('/update/{id}',[CustomersController::class,'update'])->name('update');
            Route::post('/',[CustomersController::class,'store'])->name('store');
            Route::get('/destroy/{id}',[CustomersController::class,'destroy'])->name('destroy');
        });
    });
});
Route::get('/login',[AuthController::class,'getLogin'])->name('login');
Route::post('/postlogin',[AuthController::class,'postLogin'])->name('postlogin');
Route::get('/register',[AuthController::class,'getRegister'])->name('register');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

