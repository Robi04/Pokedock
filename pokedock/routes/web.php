<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ShoppacksController;
use App\Http\Controllers\UserOrdersController;
use App\Http\Controllers\OrderItemsController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UsersController::class, 'showAll']);

Route::get('/shoppacks', [ShoppacksController::class, 'showAll']);

Route::get('/user_orders', [UserOrdersController::class, 'showAll']);

Route::get('/order_items', [OrderItemsController::class, 'showAll']);