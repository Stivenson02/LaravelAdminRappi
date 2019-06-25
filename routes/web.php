<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('home')->group(function () {
    Route::get('stores', [
        'uses' => 'StoreController@showRegister',
        'as' => 'stores_paht'
    ]);

    Route::get('store/{id}', [
        'uses' => 'StoreController@storeDetail',
        'as' => 'stores_detail_paht'
    ]);

    Route::get('delete_store/{id}', [
        'uses' => 'StoreController@deleteStore',
        'as' => 'delete_store_paht'
    ]);

    Route::POST('insert_stores', [
        'uses' => 'StoreController@registerStore',
        'as' => 'insert_stores_paht'
    ]);
});

Route::prefix('store')->group(function () {
    Route::get('product', [
        'uses' => 'ProductController@showRegister',
        'as' => 'product_paht'
    ]);

    Route::get('product/{id}', [
        'uses' => 'ProductController@productDetail',
        'as' => 'product_detail_paht'
    ]);

    Route::get('product_detail/{id}', [
        'uses' => 'ProductController@showProductDetail',
        'as' => 'product_show_detail_paht'
    ]);

    Route::get('all_data_product/{id}', [
        'uses' => 'ProductController@AllDataProduct',
        'as' => 'product_all_data_paht'
    ]);

    Route::get('delete_lote/{id}', [
        'uses' => 'ProductController@deleteLote',
        'as' => 'product_all_data_paht'
    ]);

    Route::get('delete_product/{id}', [
        'uses' => 'ProductController@deleteProduct',
        'as' => 'delete_product_paht'
    ]);

    Route::POST('insert_product', [
        'uses' => 'ProductController@registerProduct',
        'as' => 'insert_product_paht'
    ]);

    Route::POST('insert_subcategories/{id}', [
        'uses' => 'ProductController@insertSubcategories',
        'as' => 'insert_subcategories_paht'
    ]);

    Route::POST('insert_detailproduct/{id}', [
        'uses' => 'ProductController@insertDetailProduct',
        'as' => 'insert_subcategories_paht'
    ]);
});
