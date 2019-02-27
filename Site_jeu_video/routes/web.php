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



Route::get('/home', 'arrayController@index');


Route::get('/description/{id}', 'arrayController@show');

Route::get('/1', function () {
    return view('addjeu');
});


    
 Auth::routes(['verify' => true]);
    
 Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
 
 Route::resource('users', 'UserController');
 
 Route::resource('contacts', 'Front\ContactController', ['only' => ['create', 'store']]);
 
 Route::resource('contacts', 'ContactController', ['only' => ['index', 'destroy']]);
 
 Route::resource('comments', 'Front\CommentController', ['only' => ['update', 'destroy']]);
 
 Route::resource('comments', 'CommentController', ['only' => ['index', 'destroy']]);
 
 Route::resource('users', 'UserController', ['only' => ['index', 'edit', 'update', 'destroy']]);
 
 Route::resource('posts', 'PostController');
 
 
 
 
 
 
 
 
    
    

        