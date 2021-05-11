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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::group([
    'prefix' => 'cart'
], function ($route) {
    Route::get('/list', 'CartController@index');
    Route::post('/add', 'CartController@add');
    Route::delete('/delete/{id}', 'CartController@delete');
    Route::put('/update', 'CartController@update');
});


Route::get('/tag/list','TagController@index');
Route::get('/product/list','ProductController@index');
Route::get('/product/tag/list/{tag}','ProductController@tag');

