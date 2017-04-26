<?php

use App\User;



Route::get('/', 'cmsController@index');

Route::get('/submitted', 'cmsController@show');
Route::post('/submitted', 'cmsController@submitted');
/* Main Route for orders /
*/
//Route::get('/orders/submitted', 'OrdersController@show');
//Route::get('/', 'OrdersController@show');
//Route::post('/', 'OrdersController@submitted');
Route::get('/books', 'BookController@index');

# /routes/web.php
Route::get('/search', 'BookController@search');


Route::resource('tasks','TaskController');

# /routes/web.php
Route::resource('posts', 'PostController');
//Route::get('/posts', 'PostController@create');
//Route::get('/posts/{id}', 'PostController@show');
/**
/* Main Route for songs /
*/
Route::get('/songs', 'SongsController@index');
Route::get('/songs/{id}', 'SongsController@show');

/* Main Route for orders /
*/
//Route::get('/orders/submitted', 'OrdersController@show');
Route::get('users', function (){
	return User::all();
});
/* Main Route for tea /
*/

//Route::get('/tea/submitted', 'ReqController@show');
//Route::post('/tea/submitted', 'ReqController@submitted');


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
//Route::get('/', 'WelcomeController');

Route::get('/debug', function() {

	echo '<pre>';

	echo '<h1>Environment</h1>';
	echo App::environment().'</h1>';

	echo '<h1>Debugging?</h1>';
	if(config('app.debug')) echo "Yes"; else echo "No";

	echo '<h1>Database Config</h1>';
    echo 'DB defaultStringLength: '.Illuminate\Database\Schema\Builder::$defaultStringLength;
    /*
    The following commented out line will print your MySQL credentials.
    Uncomment this line only if you're facing difficulties connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your production server, making your credentials public.
    */
	//print_r(config('database.connections.mysql'));

	echo '<h1>Test Database Connection</h1>';
	try {
		$results = DB::select('SHOW DATABASES;');
		echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
		echo "<br><br>Your Databases:<br><br>";
		print_r($results);
	}
	catch (Exception $e) {
		echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
	}

	echo '</pre>';

});

//});