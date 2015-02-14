<div class="row">
	<div class="small-6 columns">
		{!! Form::label('anrede', 'Anrede:', ['class' => $errors->has('anrede') ? 'error' : '']) !!}
		{!! Form::text('anrede', null,  ['class' => $errors->has('anrede') ? 'error' : '']) !!}
		{!! $errors->first('anrede', '<span class="error">:message</span>') !!}
	</div>
</div>

<div class="row">
	<div class="small-6 columns">
		{!! Form::label('name', 'Name:', ['class' => $errors->has('name') ? 'error' : '']) !!}
		{!! Form::text('name', null, ['class' => $errors->has('name') ? 'error' : '']) !!}
		{!! $errors->first('name', '<span class="error">:message</span>') !!}
	</div>
</div>

<div class="row">
	<div class="small-6 columns">
		{!! Form::label('notizen', 'Notizen:', ['class' => $errors->has('notizen') ? 'error' : '']) !!}
		{!! Form::textarea('notizen', null,  ['class' => $errors->has('notizen') ? 'error' : '']) !!}
		{!! $errors->first('notizen', '<span class="error">:message</span>') !!}
	</div>
</div>

<div class="row">
	<div class="small-6 columns">
		{!! Form::submit('Familie speichern', ['class' => 'button']) !!}
	</div>
</div>
