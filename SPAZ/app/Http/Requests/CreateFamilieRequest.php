<?php namespace SPAZ\Http\Requests;

use SPAZ\Http\Requests\Request;
use Auth;

class CreateFamilieRequest extends Request {

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
			'anrede' => 'required',
			'name' => 'required'
			//'strasse' => '',
			//'plz' => '',
			//'ort' => '',
			//'telefon' => '',
			//'mobil' => '',
			//'fax' => '',
			//'email' => '',
			//'notizen' => '',
			//'bewilligteFahrzeit' => '',
			//'refJugendamt' => '',
			//'refMitarbeiter' => '',
			//'startBetreuung' => '',
			//'endeBetreuung' => '',
			//'status' => '',
			//'refAnsprechpartner' => '',
			//'refWeitereAdressen' => '',
		];
	}

}
