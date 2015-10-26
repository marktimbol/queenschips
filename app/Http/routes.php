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

Route::post('queue/receive', function() {
	return Queue::marshal();
});

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('/concept', ['as' => 'concept', 'uses' => 'PagesController@concept']);
Route::get('/gallery', ['as' => 'gallery', 'uses' => 'PagesController@gallery']);
Route::get('/franchising', ['as' => 'franchising', 'uses' => 'PagesController@franchising']);
Route::get('/store', ['as' => 'store', 'uses' => 'PagesController@store']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contact']); 
Route::post('/contact', ['as' => 'contact', 'uses' => 'PagesController@postContact']); 
