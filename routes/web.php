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

Route::get('/home/new', 'HomeController@create')->name('home.create');
Route::post('/home/new', 'HomeController@store')->name('home.store');

Route::get('/home/{id}', 'HomeController@show')->name('home.show');
Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
Route::put('/home/update/{id}', 'HomeController@update')->name('home.update');
Route::delete('/home/{id}/delete', 'HomeController@delete')->name('home.delete');
