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
Route::get('/startvirtuallive', 'MainController@startvirtuallive');
Route::get('/startvirtuallivekiller', 'MainController@startvirtuallivekiller');
Route::get('/stopvirtuallive', 'MainController@stopvirtuallive');
Route::get('/stopvirtuallivekiller', 'MainController@stopvirtuallivekiller');
Route::post('ajax', function (){
    return $_POST;
});
\Route::get('token', function () {
    return csrf_token();
});
\Route::get('alldone', function () {
    return view('alldone');
});

Route::post('killbyid', 'MainController@kill');
Route::post('killbyidmore', 'MainController@killmore');
