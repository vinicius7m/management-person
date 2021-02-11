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

Route::get('/people', 'Admin\\PersonController@index')->name('people.index');
Route::get('/people/create', 'Admin\\PersonController@create')->name('people.create');
Route::post('/people/person', 'Admin\\PersonController@person')->name('people.person');
Route::get('/people/{person}/edit', 'Admin\\PersonController@edit');
Route::post('/people/update/{person}', 'Admin\\PersonController@update'); 
Route::get('/people/destroy/{person}', 'Admin\\PersonController@destroy');