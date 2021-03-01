<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_product;

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

Route::get("/products","App\Http\Controllers\controller_product@index")->name("homepage");
Route::get("/products/add-to-cart/{id}","App\Http\Controllers\controller_product@addToCart")->name("addToCart");

Route::get("/products/shopping-cart/","App\Http\Controllers\controller_product@showCart")->name("showCart");
Route::get("/products/delete-cart/","App\Http\Controllers\controller_product@deleteCart")->name("deleteCart");
