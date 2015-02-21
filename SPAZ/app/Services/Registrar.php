<?php namespace SPAZ\Services;

use SPAZ\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'anrede' => 'required|max:10',
			'vorname' => 'required|max:255',
			'nachname' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'anrede' => $data['anrede'],
			'vorname' => $data['vorname'],
			'nachname' => $data['nachname'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
