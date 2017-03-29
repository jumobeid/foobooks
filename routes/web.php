<?php




//Route::get('/', function () {
//    return view('welcome');
//});

# /routes/web.php
Route::get('/search', 'BookController@search');
/**
/* Main Route for songs /
*/
Route::get('/songs', 'SongsController@index');
Route::get('/songs/{id}', 'SongsController@show');

/* Main Route for orders /
*/
//Route::get('/orders/submitted', 'OrdersController@show');
Route::get('/orders/submitted', 'OrdersController@show');
Route::post('/orders/submitted', 'OrdersController@submitted');
/**
* Book related routes--books/new takes priority 
*/

Route::get('/books/new', 'BookController@createNewBook');
Route::post('/books/new', 'BookController@storeNewBook');

Route::get('/books', 'BookController@index');

Route::get('/books/{title?}', 'BookController@show');
//Route::get('/orders/{title?}', 'OrdersController@show');


Route::get('/about/{title?}', 'PagesController@about');
Route::get('/contact/{title?}', 'PagesController@contact');
Route::get('/people/{title?}', 'PagesController@people');

if(config('app.env') == 'local') {
    #Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}

/**
* Practice
*/
Route::any('/practice/{n?}', 'PracticeController@index');


/**
* Main homepage visitors see when they visit just /
*/
Route::get('/', 'WelcomeController');

