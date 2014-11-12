<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pages.index');
});



Route::resource('categories', 'CategoriesController');
Route::resource('products', 'ProductsController');
Route::post('upload', ['as'=>'upload', 'uses'=>'ProductsController@upload']);
Route::resource('artists', 'ArtistsController');
Route::resource('genres', 'GenresController');

