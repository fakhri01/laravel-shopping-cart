<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::post('/cart/add', [CartController::class, 'addProduct']);
Route::delete('/cart/delete/{id}', [CartController::class, 'deleteProduct']);
Route::get('/cart/count', [CartController::class, 'countProducts']);
Route::get('/cart', [CartController::class, 'getCart']);