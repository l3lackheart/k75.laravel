<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "web" middleware group. Enjoy building your Admin!
|
*/

Route::get('', 'DashboardController@index');

Route::resource('products', 'ProductController', [
    'as' => 'admin',
    'except' => 'show'
]);

Route::get('articles', 'ArticleController@index');
Route::post('articles', 'ArticleController@store');

Route::get('articles/{id}/edit', 'ArticleController@edit');
Route::post('articles/{id}', 'ArticleController@update');
