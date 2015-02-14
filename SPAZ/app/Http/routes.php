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

Route::get('profile', [
	'as' => 'profile_path',
	'uses' => 'UserController@index'
]);
Route::get('profile/edit', [
	'as' => 'profile_edit_path',
	'uses' => 'UserController@edit'
]);

Route::resource('familien', 'FamilienController', [
	'names' => [
		'index'   => 'familien_path',
		'show'    => 'familie_path',
		'create'  => 'familie_create_path',
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


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
