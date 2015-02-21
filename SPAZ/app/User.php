<?php namespace SPAZ;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;

use SPAZ\Role;
use SPAZ\Permission;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, EntrustUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * Füllbare Felder für eine Familie.
	 * Werden mehr Felder im Formular angegeben, so werden
	 * diese nicht weiter beachtet und auch nicht gespeichert.
	 *
	 * @var array
	 */
	protected $fillable = [
		'anrede',
		'vorname',
		'nachname',
		'email',
		'netto_fachleistungsstunden',
		'password'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

}
