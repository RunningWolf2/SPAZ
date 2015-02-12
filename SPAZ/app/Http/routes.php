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

/*
 * Gleich zu `/home` umleiten
 */
Route::get('/', ['as' => 'main', function () {
	return redirect()->route('home');
}]);

Route::get('home', [
	'as' => 'home',
	'uses' => 'HomeController@index'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
