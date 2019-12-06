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

Route::get('/animals/{name?}', function ($name = 'animals') {
    return "Swansea zoo has many cool $name's!";
});

Route::get('/prices', function () {
    return "Jeez, this is so fcking expensive";
});

Route::redirect('/prices','/animals');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
