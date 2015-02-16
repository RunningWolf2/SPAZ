<?php namespace SPAZ\Http\Controllers;

use SPAZ\Http\Requests;
use SPAZ\Http\Controllers\Controller;

use Illuminate\Http\Request;

use SPAZ\User;

class UserController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// Nutzer muss vorher eingeloggt sein
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('profile.index');
	}

	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}

	public function edit(User $user)
	{
		return view('profile.edit', compact('user'));
	}

}
