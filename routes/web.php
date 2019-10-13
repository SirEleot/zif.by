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
Route::get('/breaking', "HomeController@breaking")->name('breaking');

Route::get('/catalog/{category}/', "Catalog\CatalogController@index")->name('catalog');
Route::get('/item/{id}/', "Catalog\CatalogController@item")->name('item');
Route::get('/cart', "Catalog\CatalogController@cart")->name('cart');
Route::post('/order', "Catalog\CatalogController@order")->name('order');
Route::get('/reset', "Catalog\CatalogController@reset")->name('reset');