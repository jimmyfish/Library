<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/library', 'LibraryController@index');

Route::get('/listBook', 'LibraryController@listBook');

Route::get('/newBook', 'LibraryController@createBookView');

Route::post('/newBook', 'LibraryController@createBook');

Route::match(['get', 'post'], 'newTrans', 'TransaksiController@input');