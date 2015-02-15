
<div class="row">

	<div class="small-6 columns">

		<div>
			{!! Form::label('name', 'Name:', ['class' => $errors->has('name') ? 'error' : '']) !!}
			{!! Form::text('name', null, ['class' => $errors->has('name') ? 'error' : '']) !!}
			{!! $errors->first('name', '<span class="error">:message</span>') !!}
		</div>
		<div>
			{!! Form::label('website', 'Website:', ['class' => $errors->has('website') ? 'error' : '']) !!}
			{!! Form::text('website', null,  ['class' => $errors->has('website') ? 'error' : '']) !!}
			{!! $errors->first('website', '<span class="error">:message</span>') !!}
		</div>

	</div>

</div>

<div>
	{!! Form::submit('Jugendamt speichern', ['class' => 'button']) !!}
</div>
