<div class="small-6 columns">

	<p>Adresse</p>

	<div>
		{!! Form::label('anrede', 'Anrede:', ['class' => $errors->has('anrede') ? 'error' : '']) !!}
		{!!
			Form::select(
				'anrede',
				Config::get('familie.anreden'),
				null,
				['class' => $errors->has('anrede') ? 'error' : '',
				'autocomplete' => 'off'])
		!!}
		{!! $errors->first('anrede', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('name', 'Name:', ['class' => $errors->has('name') ? 'error' : '']) !!}
		{!! Form::text('name', null, ['class' => $errors->has('name') ? 'error' : '']) !!}
		{!! $errors->first('name', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('strasse', 'Straße:', ['class' => $errors->has('strasse') ? 'error' : '']) !!}
		{!! Form::text('strasse', null,  ['class' => $errors->has('strasse') ? 'error' : '']) !!}
		{!! $errors->first('strasse', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('plz', 'Plz:', ['class' => $errors->has('plz') ? 'error' : '']) !!}
		{!! Form::text('plz', null,  ['class' => $errors->has('plz') ? 'error' : '']) !!}
		{!! $errors->first('plz', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('ort', 'Ort:', ['class' => $errors->has('ort') ? 'error' : '']) !!}
		{!! Form::text('ort', null,  ['class' => $errors->has('ort') ? 'error' : '']) !!}
		{!! $errors->first('ort', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('telefon', 'Telefon:', ['class' => $errors->has('telefon') ? 'error' : '']) !!}
		{!! Form::text('telefon', null,  ['class' => $errors->has('telefon') ? 'error' : '']) !!}
		{!! $errors->first('telefon', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('mobil', 'Mobil:', ['class' => $errors->has('mobil') ? 'error' : '']) !!}
		{!! Form::text('mobil', null,  ['class' => $errors->has('mobil') ? 'error' : '']) !!}
		{!! $errors->first('mobil', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('fax', 'Fax:', ['class' => $errors->has('fax') ? 'error' : '']) !!}
		{!! Form::text('fax', null,  ['class' => $errors->has('fax') ? 'error' : '']) !!}
		{!! $errors->first('fax', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('email', 'E-Mail:', ['class' => $errors->has('email') ? 'error' : '']) !!}
		{!! Form::text('email', null,  ['class' => $errors->has('email') ? 'error' : '']) !!}
		{!! $errors->first('email', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('notizen', 'Notizen:', ['class' => $errors->has('notizen') ? 'error' : '']) !!}
		{!! Form::textarea('notizen', null,  ['class' => $errors->has('notizen') ? 'error' : '']) !!}
		{!! $errors->first('notizen', '<span class="error">:message</span>') !!}
	</div>

</div>

<div class="small-6 columns">

	<p>Daten</p>

	<div>
		{!! Form::label('bewilligte_fahrzeit', 'Bewilligte Fahrzeit:', ['class' => $errors->has('bewilligte_fahrzeit') ? 'error' : '']) !!}
		{!! Form::text('bewilligte_fahrzeit', null,  ['class' => $errors->has('bewilligte_fahrzeit') ? 'error' : '']) !!}
		{!! $errors->first('bewilligte_fahrzeit', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('ref_jugendamt', 'zuständiges Jugendamt:', ['class' => $errors->has('ref_jugendamt') ? 'error' : '']) !!}
		<select name="ref_jugendamt" id="ref_jugendamt"
				autocomplete="off" class="{{ $errors->has('ref_jugendamt') ? 'error' : '' }}">
			@foreach (SPAZ\Jugendamt::get() as $amt)
				<option
					value="{{ $amt->id }}"
					{!! isset($familie) && $amt->id == $familie->ref_jugendamt ? 'selected="selected"' : '' !!}
				>{{ $amt->name }}</option>
			@endforeach
		</select>
		{!! $errors->first('ref_jugendamt', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('ref_mitarbeiter', 'zuständiger Mitarbeiter:', ['class' => $errors->has('ref_mitarbeiter') ? 'error' : '']) !!}
		<select name="ref_mitarbeiter" id="ref_mitarbeiter"
				autocomplete="off" class="{{ $errors->has('ref_mitarbeiter') ? 'error' : '' }}">
			@foreach (SPAZ\User::get() as $mitarbeiter)
				<option
					value="{{ $mitarbeiter->id }}"
					@if ((Form::old('ref_mitarbeiter') == '' && isset($familie) && $mitarbeiter->id == $familie->ref_mitarbeiter)
						|| Form::old('ref_mitarbeiter') == $mitarbeiter->id)
						selected="selected"
					@endif
				>{{ $mitarbeiter->vorname . ' ' . $mitarbeiter->nachname }}</option>
			@endforeach
		</select>
		{!! $errors->first('ref_mitarbeiter', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('start_betreuung', 'Beginn Betreuung:', ['class' => $errors->has('start_betreuung') ? 'error' : '']) !!}
		{!! Form::text('start_betreuung', null,  ['class' => $errors->has('start_betreuung') ? 'error' : '']) !!}
		{!! $errors->first('start_betreuung', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('end_betreuung', 'Ende Betreuung:', ['class' => $errors->has('end_betreuung') ? 'error' : '']) !!}
		{!! Form::text('end_betreuung', null,  ['class' => $errors->has('end_betreuung') ? 'error' : '']) !!}
		{!! $errors->first('end_betreuung', '<span class="error">:message</span>') !!}
	</div>
	<div>
		{!! Form::label('status', 'Status:', ['class' => $errors->has('status') ? 'error' : '']) !!}
		{!! Form::text('status', null,  ['class' => $errors->has('status') ? 'error' : '']) !!}
		{!! $errors->first('status', '<span class="error">:message</span>') !!}
	</div>
</div>
