<?php namespace SPAZ;

use Illuminate\Database\Eloquent\Model;

class FamilienAnsprechpartner extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'familien_ansprechpartner';

	/**
	 * Füllbare Felder für eine Familie.
	 * Werden mehr Felder im Formular angegeben, so werden
	 * diese nicht weiter beachtet und auch nicht gespeichert.
	 *
	 * @var array
	 */
	protected $fillable = [
		'typ',
		'anrede',
		'vorname',
		'nachname',
		'strasse',
		'plz',
		'ort',
		'telefon',
		'mobil',
		'fax',
		'email',
		'sonstiges',
		'ref_familie'
	];

}
