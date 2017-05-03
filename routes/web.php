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

Route::get('/', 'MainController@get');
Route::get('/living', 'MainController@getliving');
Route::get('/population', 'MainController@getpopulation');
Route::get('/dead', 'MainController@dead');
Route::post('ajax', function (){
    return $_POST;
});
\Route::get('token', function () {
    return csrf_token();
});

Route::post('killbyid', 'MainController@kill');

