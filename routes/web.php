<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;

Route::get('/', [ProductController::class, 'index']);

Route::get('/product', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'store'])->name('product');

Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
