<?php namespace SPAZ\Http\Controllers;

use SPAZ\Http\Requests;
use SPAZ\Http\Requests\CreateUserRequest;
use SPAZ\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Auth;
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

	public function edit()
	{
		$user = Auth::user();
		return view('profile.edit', compact('user'));
	}

	public function update(CreateUserRequest $request)
	{
		$r = $request->input();

		// Wenn ein neues Passwort gesetzt wird, wird es bcrypt verschlüsselt
		if (isset($r['password']))
		{
			$r['password'] = bcrypt($r['password']);
		}

		Auth::user()->fill($r)->save();

		return redirect(route('profile_path'));
	}

}
