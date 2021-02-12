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


Route::group(['prefix' => 'people'], function() {
    Route::get('/', 'PersonController@index')->name('people.index');
    Route::get('create', 'PersonController@create')->name('people.create');
    Route::post('person', 'PersonController@person')->name('people.person');
    Route::get('{person}/edit', 'PersonController@edit')->name('people.edit');
    Route::post('update/{person}', 'PersonController@update')->name('people.update'); 
    Route::delete('destroy/{person}', 'PersonController@destroy')->name('people.destroy');

});