@extends('app')

@section('content')

<div style="margin-top:20px;">
	<div class="row">
		<div class="small-4 small-offset-4">

			<div class="panel radius">

				<h2>Register</h2>

				@if (count($errors) > 0)
					<div class="alert-box alert radius">
						<strong>Whoops!</strong> There were some problems with your input.
					</div>

					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				@endif

				<form role="form" method="POST" action="/auth/register">

					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="row">
						<div class="small-12 column">
							{!! Form::label('anrede', 'Anrede:') !!}
							{!!
								Form::select(
									'anrede',
									Config::get('user.anreden'))
							!!}
						</div>
					</div>

					<div class="row">
						<label class="small-12 column">Vorname
							<input type="text" class="form-control" name="vorname" value="{{ old('vorname') }}">
						</label>
					</div>

					<div class="row">
						<label class="small-12 column">Nachname
							<input type="text" class="form-control" name="nachname" value="{{ old('nachname') }}">
						</label>
					</div>

					<div class="row">
						<label class="small-12 column">E-Mail Address
							<input type="email" class="form-control" name="email" value="{{ old('email') }}">
						</label>
					</div>

					<div class="row">
						<label class="small-12 column">Password

							<input type="password" class="form-control" name="password">
						</label>
					</div>

					<div class="row">
						<label class="small-12 column">Confirm Password
							<input type="password" class="form-control" name="password_confirmation">
						</label>
					</div>

					<div class="row">
						<div class="column">
							<button type="submit" class="right">
								Register
							</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection
