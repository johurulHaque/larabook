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
//
// Route::get('/','StudentController@show')->name('home');
// Route::get('/put','StudentController@put')->name('put');
// Route::get('/show','StudentController@show')->name('show');
//
// sign// sign
// sign// sign
// Route::get('/','SignController@master')->name('master');
// Route::get('/create','SignController@create')->name('create');
// Route::get('/show','SignController@show')->name('show');
// Route::get('/edit/{id}','SignController@edit')->name('edit');

// Route::post('/store','SignController@store')->name('store');
// Route::get('/delete/{id}','SignController@delete')->name('delete');
// Route::post('/update/{id}','SignController@update')->name('update');


// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
//image
//image
// Route::get('/','ImageController@home')->name('home');
// Route::post('/store','ImageController@store')->name('store');

// database
// database
Route::get('/', function(){
	return redirect()->route('show');
})->name('home');

Route::post('/post', 'databaseController@store')->name('store');
Route::get('/show', 'databaseController@show')->name('show');

//middleware
//middleware
// Route::get('/','databaseController@home');
// Route::get('/about','databaseController@about')->middleware('test');

//LaraBook 
//LaraBook
Route::get('/', function(){
	return view('LaraBook.index');
})->name('index');

Route::get('/blade', function(){
	return view('LaraBook.blade');
})->name('blade');

Route::get('/route', function(){
	return view('LaraBook.route');
})->name('route');

Route::get('/migration', function(){
	return view('LaraBook.migration');
})->name('migration');

Route::get('/model', function(){
	return view('LaraBook.model');
})->name('model');

Route::get('/formvalidation', function(){
	return view('LaraBook.form&validation');
})->name('formvalidation');

Route::get('/controller', function(){
	return view('LaraBook.controller');
})->name('controller');

Route::get('/query', function(){
	return view('LaraBook.query');
})->name('query');
Route::get('/middleware', function(){
	return view('LaraBook.middleware');
})->name('middleware');


