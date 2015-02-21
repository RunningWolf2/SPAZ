<?php namespace SPAZ\Http\Requests;

use SPAZ\Http\Requests\Request;
use Auth;

class CreateUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return Auth::check();
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'anrede'   => 'required|max:10',
			'vorname'  => 'required|max:255',
			'nachname' => 'required|max:255',
			'email'    => 'required|email|max:255',
			'password' => 'confirmed|min:6'
		];
	}

}
