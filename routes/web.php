<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index') -> name('televisions.index');
Route::get('/television/show/{id}', 'GuestController@show') -> name('television.show');

Route::get('/television/create', 'LoggedController@create') -> name('television.create');
Route::post('/television/create', 'LoggedController@store') -> name('television.store');

Route::get('/television/edit/{id}', 'LoggedController@edit') -> name('television.edit');
Route::post('/television/update/{id}', 'LoggedController@update') -> name('television.update');

Route::get('/television/delete/{id}', 'LoggedController@destroy') -> name('television.delete');
