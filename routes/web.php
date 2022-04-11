<?php

use App\Http\Controllers\ComidaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Models\comida;
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
Route::get('/compras',[CompraController::class, 'compras'])->name('compras');

Route::get('/menu',[ComidaController::class, 'comida']);

Route::post('/cart-add', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart-checkout', [CartController::class, 'cart'])->name('cart.checkout');

Route::post('/cart-clear', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/cart-removeitem', [CartController::class, 'removeitem'])->name('cart.removeitem');


Route::get('/paypal/pay', [PaymentController::class, 'payWithPayPal']);
Route::POST('/paypal/pay', [PaymentController::class, 'payWithPayPal'])->name('paypal.payWithPayPal');
Route::get('/paypal/status', [PaymentController::class,'payPalStatus']);


Auth::routes();


