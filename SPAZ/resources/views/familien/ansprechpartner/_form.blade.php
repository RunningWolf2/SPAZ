<div class="row">

	<div class="small-6 columns">

		{!! $errors->first('ref_familie', '<span class="error">:message</span>') !!}

		<div>
			{!! Form::label('typ', 'Typ:', ['class' => $errors->has('typ') ? 'error' : '']) !!}
			{!!
				Form::select(
					'typ',
					Config::get('familie.ansprechpartner.typ'),
					null,
					['class' => $errors->has('typ') ? 'error' : '',
					'autocomplete' => 'off'])
			!!}
			{!! $errors->first('typ', '<span class="error">:message</span>') !!}
		</div>
		<div>
			{!! Form::label('vorname', 'Vorname:', ['class' => $errors->has('vorname') ? 'error' : '']) !!}
			{!! Form::text('vorname', null, ['class' => $errors->has('vorname') ? 'error' : '']) !!}
			{!! $errors->first('vorname', '<span class="error">:message</span>') !!}
		</div>
		<div>
			{!! Form::label('nachname', 'Nachname:', ['class' => $errors->has('nachname') ? 'error' : '']) !!}
			{!! Form::text('nachname', null, ['class' => $errors->has('nachname') ? 'error' : '']) !!}
			{!! $errors->first('nachname', '<span class="error">:message</span>') !!}
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
			{!! Form::label('sonstiges', 'Sonstiges:', ['class' => $errors->has('sonstiges') ? 'error' : '']) !!}
			{!! Form::textarea('sonstiges', null,  ['class' => $errors->has('sonstiges') ? 'error' : '']) !!}
			{!! $errors->first('sonstiges', '<span class="error">:message</span>') !!}
		</div>

		<div>
			{!! Form::submit('Ansprechpartner speichern', ['class' => 'button']) !!}
		</div>

	</div>

</div>
