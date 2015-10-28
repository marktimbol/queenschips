<?php


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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {	
	
	Route::get('/', ['as' => 'admin', 'uses' => 'Admin\AdminController@home']);
	Route::resource('galleries', 'Admin\GalleriesController', [
		'only'	=> ['index','store','destroy']
		]);

});