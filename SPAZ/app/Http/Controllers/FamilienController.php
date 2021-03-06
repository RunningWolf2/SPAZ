<?php namespace SPAZ\Http\Controllers;

use SPAZ\Http\Requests;
use SPAZ\Http\Requests\CreateFamilieRequest;
use SPAZ\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB, Auth;
use SPAZ\Familie;

class FamilienController extends Controller {

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
	public function index(Familie $familie)
	{
		$familien = $familie->get();

		return view('familien.index', compact('familien'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show(Familie $familie)
	{
		return view('familien.show', compact('familie'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Nutzer kann Familien erstellen
		if (!Auth::user()->can('create-familie'))
		{
			return abort(403);
		}
		return view('familien.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateFamilieRequest $request, Familie $familie)
	{
		// Nutzer kann Familien erstellen
		if (!Auth::user()->can('create-familie'))
		{
			return abort(403);
		}

		$familie->create($request->all());

		return redirect()->route('familien_path');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	public function edit(Familie $familie)
	{
		// Nutzer kann Familien bearbeiten
		if (!Auth::user()->can('edit-familie'))
		{
			return abort(403);
		}
		return view('familien.edit', compact('familie'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update(Familie $familie, CreateFamilieRequest $request)
	{
		// Nutzer kann Familien bearbeiten
		if (!Auth::user()->can('edit-familie'))
		{
			return abort(403);
		}
		$familie->fill($request->input())->save();

		return redirect(route('familie_path', [$familie->id]));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Nutzer kann Familien löschen
		if (!Auth::user()->can('delete-familie'))
		{
			return abort(403);
		}
	}

}
