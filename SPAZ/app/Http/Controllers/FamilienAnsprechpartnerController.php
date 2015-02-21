<?php namespace SPAZ\Http\Controllers;

use SPAZ\Http\Requests;
use SPAZ\Http\Requests\CreateFamilienAnsprechpartnerRequest;
use SPAZ\Http\Controllers\Controller;

use Illuminate\Http\Request;

use SPAZ\Familie;
use SPAZ\FamilienAnsprechpartner;

use Auth;

class FamilienAnsprechpartnerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Familie $familie)
	{
		return view('familien.ansprechpartner.index', compact('familie'));
	}

/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Familie $familie)
	{
		// Nutzer kann Familien erstellen
		if (!Auth::user()->can('create-familie'))
		{
			return abort(403);
		}
		return view('familien.ansprechpartner.create', compact('familie'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateFamilienAnsprechpartnerRequest $request, FamilienAnsprechpartner $ansprechpartner)
	{
		// Nutzer kann Familien erstellen
		if (!Auth::user()->can('create-familie'))
		{
			return abort(403);
		}

		$ansprechpartner->create($request->all());

		return redirect()->route('familie_path', [$request->only('ref_familie')['ref_familie']]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	//public function show($id)
	//{
	//	//
	//}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Familie $familie, FamilienAnsprechpartner $ansprechpartner)
	{
		// Nutzer kann Familien bearbeiten
		if (!Auth::user()->can('edit-familie'))
		{
			return abort(403);
		}
		return view('familien.ansprechpartner.edit', compact('ansprechpartner', 'familie'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateFamilienAnsprechpartnerRequest $request, FamilienAnsprechpartner $ansprechpartner)
	{
		// Nutzer kann Familien bearbeiten
		if (!Auth::user()->can('edit-familie'))
		{
			return abort(403);
		}
		$ansprechpartner->fill($request->input())->save();

		return redirect(route('familie_path', [$ansprechpartner->ref_familie]));
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
