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

Route::model('users',                     'SPAZ\User');
Route::model('familien',                  'SPAZ\Familie');
Route::model('familien_ansprechpartner',  'SPAZ\FamilienAnsprechpartner');
Route::model('jugendamt',                 'SPAZ\Jugendamt');

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
	'uses' => 'UserController@showProfile'
]);
Route::get('profile/edit', [
	'as' => 'profile_edit_path',
	'uses' => 'UserController@edit'
]);
Route::patch('profile/update', [
	'as' => 'profile_update_path',
	'uses' => 'UserController@update'
]);

Route::resource('users', 'UserController', [
	'names' => [
		'index'   => 'users_path',
		'show'    => 'user_path'
	],
	'only' => [
		'index',
		'show'
	]
]);


Route::resource('familien', 'FamilienController', [
	'names' => [
		'index'   => 'familien_path',
		'show'    => 'familie_path',
		'create'  => 'familie_create_path',
		'store'   => 'familien_store_path',
		'edit'    => 'familie_edit_path',
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


Route::get('familien/{familien}/ansprechpartner', [
	'as' => 'familien_ansprechpartner_path',
	'uses' => 'FamilienAnsprechpartnerController@index'
]);
Route::get('familien/{familien}/ansprechpartner/create', [
	'as' => 'familien_ansprechpartner_create_path',
	'uses' => 'FamilienAnsprechpartnerController@create'
]);
Route::post('familien/ansprechpartner/create', [
	'as' => 'familien_ansprechpartner_store_path',
	'uses' => 'FamilienAnsprechpartnerController@store'
]);
Route::get('familien/{familien}/ansprechpartner/{familien_ansprechpartner}/edit', [
	'as' => 'familien_ansprechpartner_edit_path',
	'uses' => 'FamilienAnsprechpartnerController@edit'
]);
Route::patch('familien/ansprechpartner/{familien_ansprechpartner}/edit', [
	'as' => 'familien_ansprechpartner_update_path',
	'uses' => 'FamilienAnsprechpartnerController@update'
]);


Route::resource('jugendamt', 'JugendamtController', [
	'names' => [
		'index'   => 'jugendaemter_path',
		'show'    => 'jugendamt_path',
		'create'  => 'jugendamt_create_path',
		'store'   => 'jugendamt_store_path',
		'edit'    => 'jugendamt_edit_path',
		'update'  => 'jugendamt_update_path',
		'destroy' => 'jugendamt_destroy_path'
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
