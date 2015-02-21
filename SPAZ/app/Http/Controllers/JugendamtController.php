<?php namespace SPAZ\Http\Controllers;

use SPAZ\Http\Requests;
use SPAZ\Http\Requests\CreateJugendamtRequest;
use SPAZ\Http\Controllers\Controller;

use Illuminate\Http\Request;

use DB, Auth;
use SPAZ\Jugendamt;

class JugendamtController extends Controller {

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
	public function index(Jugendamt $jugendamt)
	{
		$jugendaemter = $jugendamt->get();

		return view('jugendamt.index', compact('jugendaemter'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show(Jugendamt $jugendamt)
	{
		return view('jugendamt.show', compact('jugendamt'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Nutzer kann Jugendämter erstellen
		if (!Auth::user()->can('edit-jugendamt'))
		{
			return abort(403);
		}
		return view('jugendamt.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateJugendamtRequest $request, Jugendamt $jugendamt)
	{
		// Nutzer kann Jugendämter erstellen
		if (!Auth::user()->can('edit-jugendamt'))
		{
			return abort(403);
		}

		$jugendamt->create($request->all());

		return redirect()->route('jugendaemter_path');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	public function edit(Jugendamt $jugendamt)
	{
		// Nutzer kann Jugendämter bearbeiten
		if (!Auth::user()->can('edit-jugendamt'))
		{
			return abort(403);
		}
		return view('jugendamt.edit', compact('jugendamt'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @return Response
	 */
	public function update(Jugendamt $jugendamt, CreateJugendamtRequest $request)
	{
		// Nutzer kann Jugendämter bearbeiten
		if (!Auth::user()->can('edit-jugendamt'))
		{
			return abort(403);
		}

		$jugendamt->fill($request->input())->save();

		return redirect(route('jugendamt_path', [$jugendamt->id]));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// Nutzer kann Jugendämter löschen
		if (!Auth::user()->can('delete-jugendamt'))
		{
			return abort(403);
		}
	}

}
