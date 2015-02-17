<?php namespace SPAZ;

use Illuminate\Database\Eloquent\Model;

class Jugendamt extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'jugendamt';

	/**
	 * Füllbare Felder für eine Familie.
	 * Werden mehr Felder im Formular angegeben, so werden
	 * diese nicht weiter beachtet und auch nicht gespeichert.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'website'
	];

}
