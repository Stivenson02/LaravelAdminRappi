<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => ['auth:api']], function () {
    Route::prefix('products')->group(function () {
        Route::get('get_products/{id_store}', 'Api\ProductController@getProduct');
        Route::get('get_lotes_products/{id_product}', 'Api\ProductController@getLotesProduct');
        Route::post('take_product', 'Api\ProductController@TakeProduct');
    });
    Route::prefix('store')->group(function () {
        Route::get('get_stores', 'Api\StoreController@getStores');
    });
});
