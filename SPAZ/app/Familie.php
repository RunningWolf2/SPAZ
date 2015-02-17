<?php namespace SPAZ;

use Illuminate\Database\Eloquent\Model;

class Familie extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'familien';

	/**
	 * Füllbare Felder für eine Familie.
	 * Werden mehr Felder im Formular angegeben, so werden
	 * diese nicht weiter beachtet und auch nicht gespeichert.
	 *
	 * @var array
	 */
	protected $fillable = [
		'anrede',
		'name',
		'strasse',
		'plz',
		'ort',
		'telefon',
		'mobil',
		'fax',
		'email',
		'notizen',
		'bewilligte_fahrzeit',
		'ref_jugendamt',
		'ref_mitarbeiter',
		'start_betreuung',
		'end_betreuung',
		'status'
	];

}
