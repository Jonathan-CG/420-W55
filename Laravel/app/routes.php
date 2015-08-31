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
	return View::make('hello');
});

Route::get('epicerie/ajout', 'EpicerieController@ajout');
Route::post('epicerie/ajout', array('before' => 'csrf', 'uses' =>'EpicerieController@ajoutPost'));
Route::get('epicerie/voir', 'EpicerieController@liste');
Route::get('epicerie/effacer/{id}', 'EpicerieController@effacer');
Route::get('epicerie/modifier/{id}', 'EpicerieController@modifier');
Route::post('epicerie/modifier/{id}',  array('before' => 'csrf', 'uses' =>'EpicerieController@modifierPost'));