<?php

use App\Http\Controllers\ComidaController;
use App\Http\Controllers\CartController;
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
    return view('layouts.index');
});

Route::get('/menu',[ComidaController::class, 'comida']);

Route::post('/cart-add', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart-checkout', [CartController::class, 'cart'])->name('cart.checkout');

Route::post('/cart-clear', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/cart-removeitem', [CartController::class, 'removeitem'])->name('cart.removeitem');



Auth::routes();


