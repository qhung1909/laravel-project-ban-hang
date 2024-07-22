<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminContrller;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
// Home Page 
Route::get('/', [HomeController::class, 'index']);

//News
Route::get('/news',[NewsController::class, 'index']);
//Products

//Cart
Route::prefix('api')->group(function(){
    Route::resource('/cart', CartController::class);
    Route::resource('/product', ApiController::class);
    Route::get('/products/detail/{id}', [ProductsController::class, 'detail']);
    Route::get('/products/{id}', [ProductsController::class, 'category'])->name('product');
    Route::get('/tracking', [CartController::class,'tracking'])->name('tracking');
    Route::post('/register', [AuthController::class, 'registerPost']);
});
Route::get('/cart', [CartController::class,'cart'])->name('cart');
Route::post('/cart', [CartController::class,'checkout']);


//Login - Register - Logout


Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('authcheck');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//Admin
Route::get('/admin', [AdminContrller::class, 'dashboard'])->name('admin')->middleware('admin');
Route::get('/admin/addProduct', [AdminContrller::class, 'createProduct'])->name('products.create')->middleware('admin');
Route::post('/admin/addProduct', [AdminContrller::class, 'store'])->name('products.store')->middleware('admin');
Route::delete('/admin/{product}', [AdminContrller::class, 'deleteProduct'])->name('product.delete')->middleware('admin');
Route::get('/admin/{product}/editProduct',[AdminContrller::class, 'edit'])->name('product.edit')->middleware('admin');
Route::put('/admin/{product}', [AdminContrller::class, 'updateProduct'])->name('product.update')->middleware('admin');
