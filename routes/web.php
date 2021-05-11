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
    return view('app');
});
Route::get('/catalog', function () {
    return view('catalog');
});
Route::get('/catalog/tag/{code}', function () {
    return view('catalog');
});
Route::get('/cart', function () {
    return view('cart');
});
