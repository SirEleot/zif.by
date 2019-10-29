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

Route::get('/', "HomeController@index")->name('home');
Route::get('/breaking/{sity}', "HomeController@breaking")->name('breaking');
Route::get('/posts', "HomeController@posts")->name('posts');
Route::get('/post/{id}', "HomeController@post")->name('post');

Route::get('/catalog/{category}/', "Catalog\CatalogController@index")->name('catalog');
Route::get('/item/{id}/', "Catalog\CatalogController@item")->name('item');
Route::get('/cart', "Catalog\CatalogController@cart")->name('cart');
Route::post('/order', "Catalog\CatalogController@order")->name('order');
Route::get('/reset', "Catalog\CatalogController@reset")->name('reset');


Route::group(['namespace'=>'Admin', 'prefix'=>'admin'], function ()
{
    Route::resource(
        'items', 
        "AdminItemsController"
    )->names('admin.items');
    Route::post('setKof', 'AdminItemsController@setCoef')->name('admin.setCoef');
});

Auth::routes();