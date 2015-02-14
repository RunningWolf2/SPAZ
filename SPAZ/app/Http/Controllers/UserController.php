<?php namespace SPAZ\Http\Controllers;

use SPAZ\Http\Requests;
use SPAZ\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('profile.index');
	}

	public function edit()
	{
		return view('profile.edit');
	}

}
