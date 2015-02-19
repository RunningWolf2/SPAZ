<?php namespace SPAZ\Http\Requests;

use SPAZ\Http\Requests\Request;
use Auth;

class CreateFamilienAnsprechpartnerRequest extends Request {

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
			//'typ' => '',
			//'anrede' => '',
			'vorname' => 'required',
			'nachname' => 'required',
			//'strasse' => '',
			'plz' => 'integer|digits:5',
			//'ort' => '',
			//'telefon' => '',
			//'mobil' => '',
			//'fax' => '',
			'email' => 'email',
			//'sonstiges' => '',
			'ref_familie' => 'required|integer|exists:familien,id'
		];
	}

}
