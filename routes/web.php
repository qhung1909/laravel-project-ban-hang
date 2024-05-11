<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\AdminContrller;
use App\Http\Controllers\AuthController;

// Home Page 
Route::get('/', [HomeController::class, 'index']);

//Products

Route::get('/products/{id}', [ProductsController::class, 'category'])->name('product');
Route::get('/products/detail/{id}', [ProductsController::class, 'detail']);

//Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');

//Login - Register - Logout
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('authcheck');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//Admin
Route::get('/admin', [AdminContrller::class, 'index'])->middleware('admin');