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
Route::get('jeux/{id}','JeuController@show');

Route::get('jeux','JeuController@index');
    
 Auth::routes(['verify' => true]);
    
 Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
 
 Route::resource('users', 'UserController');
 
 
 
 Route::resource('contacts', 'ContactController', ['only' => ['index', 'destroy']]);
 
 
 
 
 
 Route::resource('users', 'UserController', ['only' => ['index', 'edit', 'update', 'destroy']]);
 

 
 Route::get('users/{user}/destroy', 'UserController@destroyForm');
 
 
 
 
 
 
 
 
    
    

        