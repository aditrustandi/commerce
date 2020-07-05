<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product-hero', 'ProductsController@producstHero');
Route::get('/catalog', 'ProductsController@catalog');
Route::post('/filter-catalog', 'ProductsController@filterCatalog');

Route::get('/filter-catalog', 'ProductsController@filterCatalog');
Route::get('/get-detail-product/{id}', 'ProductsController@detailProduct');
Route::get('/get-color-product/{id}/{size}', 'ProductsController@colorProduct');
Route::post('/cart-add-product', 'ProductsController@cartAddProduct');

Route::get('/count-cart-header', 'ProductsController@countCartHeader');
Route::get('/get-cart-header', 'ProductsController@getCartHeader');

// Route::get('/test', 'ProductsController@test');