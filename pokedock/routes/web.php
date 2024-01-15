<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserOrdersController;
use App\Http\Controllers\OrderItemsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\LogOutControleur;


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

Route::get('/users', [UsersController::class, 'showAll'])->name('users');
Route::get('/shop', [ShopController::class, 'showAll'])->name('shop');
Route::get('/user_orders', [UserOrdersController::class, 'showAll'])->name('user_orders');
Route::get('/order_items', [OrderItemsController::class, 'showAll'])->name('order_items');

Route::get('/', [WelcomeController::class, 'showAll'])->name('welcome');

Route::get('/login', [LogInController::class, 'showAll'])->name('login');
Route::post('/login/authenticate', [LogInController::class, 'authenticate'])->name('login.authenticate');

Route::get('/register', [SingUpController::class, 'showAll'])->name('register');
Route::post('/register', [SingUpController::class, 'register']);

Route::get('/logout', [LogOutControleur::class, 'logout'])->name('logout');

Route::get('/dashboard', [HomeController::class, 'showAll'])->name('dashboard');
