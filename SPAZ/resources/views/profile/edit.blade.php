@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<div class="radius panel">

				<h2>Profil</h2>

				@if (count($errors) > 0)

					<div class="alert-box alert radius" data-alert>
						<strong>Whoops!</strong>
						There were some problems with your input.
					</div>

					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>

				@endif

				{!! Form::model($user, ['route' => ['profile_update_path', $user->id], 'method' => 'PATCH']) !!}

					<div class="row">

						<div class="small-6 columns">

							<div>
								{!! Form::label('anrede', 'Anrede:', ['class' => $errors->has('anrede') ? 'error' : '']) !!}
								{!!
									Form::select(
										'anrede',
										Config::get('user.anreden'),
										null,
										['class' => $errors->has('anrede') ? 'error' : '',
										'autocomplete' => 'off'])
								!!}
								{!! $errors->first('anrede', '<span class="error">:message</span>') !!}
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
								{!! Form::label('email', 'E-Mail:', ['class' => $errors->has('email') ? 'error' : '']) !!}
								{!! Form::text('email', null, ['class' => $errors->has('email') ? 'error' : '']) !!}
								{!! $errors->first('email', '<span class="error">:message</span>') !!}
							</div>

							<div>
								<label>Neues Passwort
									<input type="password" class="form-control" name="password">
								</label>
							</div>

							<div>
								<label>Passwort bestätigen
									<input type="password" class="form-control" name="password_confirmation">
								</label>
							</div>

						</div>

					</div>

					{!! Form::submit('Speichern', ['class' => 'button']) !!}

				{!! Form::close() !!}

			</div>

		</div>
	</div>
</div>

@endsection
