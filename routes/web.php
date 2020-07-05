<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/catalog', 'CatalogController@index')->name('catalog');
Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::get('/confirm-cart', 'CheckoutController@confirmCheckout')->name('confirm-cart');
Route::get('/detail-product/{id}', 'DetailProductController@index')->name('detail-product');
