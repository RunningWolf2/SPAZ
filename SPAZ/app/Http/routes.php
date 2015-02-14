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

Route::model('familien', 'SPAZ\Familie');

/*
 * Gleich zu `/home` umleiten
 */
Route::get('/', ['as' => 'main', function () {
	return redirect()->route('home');
}]);

/*
 * Startseite/Dashboard für den Nutzer
 */
Route::get('home', [
	'as' => 'home',
	'uses' => 'HomeController@index'
]);


Route::resource('familien', 'FamilienController', [
	'names' => [
		'index'   => 'familien_path',
		'show'    => 'familie_path',
		'create'  => 'familien_create_path',
		'store'   => 'familien_store_path',
		'edit'    => 'familien_edit_path',
		'update'  => 'familie_update_path',
		'destroy' => 'familie_destroy_path'
	],
	'only' => [
		'index',
		'show',
		'create',
		'store',
		'edit',
		'update',
		'destroy'
	]
]);

//Route::get('familien', 'FamilienController@index');
//Route::get('familien/{familie}', 'FamilienController@show');
//Route::get('familien/{familie}/edit', 'FamilienController@edit');
//Route::patch('familien/{familie}', 'FamilienController@update');
//Route::get('familien/{familie}/nachweise', 'FamilienController@getFamilienNachweise');



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
