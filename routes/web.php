<?php

Route::get('/books','BookController@index');
Route::get('/books/{title?}','BookController@view');
Route::get('/','WelcomeController');



//Route::get('/', function () {
//    return view('welcome');
//});
