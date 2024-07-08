<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('toko/index', [CrudController::class, 'index']);

Route::get('toko/addcategory', [CategoryController::class, 'index']);
Route::post('toko/addcategory', [CategoryController::class, 'store']);



Route::get('toko/addproduct', function () {
        return view('toko.addproduct');
    });

Route::get('toko/cart', function () {
        return view('toko.cart');
    });

Route::get('toko/payment', function () {
        return view('toko.payment');
    });
