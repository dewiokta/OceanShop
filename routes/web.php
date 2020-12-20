<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/produk',[App\Http\Controllers\ProductController::class, 'product'])->name('produk');
Route::get('/edit',[App\Http\Controllers\EditController::class, 'edit']);
Route::post('/update', [App\Http\Controllers\EditController::class, 'update']);
Route::get('/akun', [App\Http\Controllers\AkunController::class, 'akun']);
Route::get('/order/{id}', [App\Http\Controllers\OrderController::class, 'order']);
Route::post('/checkout/{id}', [App\Http\Controllers\OrderController::class, 'buy']);
Route::get('/checkout', [App\Http\Controllers\OrderController::class, 'checkout']);
Route::get('/payment', [App\Http\Controllers\OrderController::class, 'buy']);
Route::get('/cari',[App\Http\Controllers\ProductController::class, 'cari']);
