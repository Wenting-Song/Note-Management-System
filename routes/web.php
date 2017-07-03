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


/* 
	location-of-this-file: app/
*/

/*Route::get('/', function()
{
	return 'You have arrived!!';
});*/
Route::get('/auth','UseruserController@auth');
Route::get('/','UseruserController@home')->name('home');
Route::get('index','UseruserController@index'); 
Route::get('/notes/show','NotenoteController@show');
Route::get('/users/{posts} ','NotenoteController@showeach');
Route::get('/notes/create','UseruserController@create');
Route::post('/users','NotenoteController@store');
Route::get('/home','HomeController@index');
Route::get('/register','RegistrationController@create');
Route::post('/register','RegistrationController@store');
Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@postLogin');
Route::get('/logout','SessionsController@destroy');
Route::get('/welcome','UseruserController@welcome');


//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();


