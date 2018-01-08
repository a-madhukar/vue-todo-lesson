<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('todos/index','ToDosController@index');


Route::post('todos', 'ToDosController@store'); 
