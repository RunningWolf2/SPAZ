@extends('app')

@section('content')

<div style="margin-top:20px;">
	<div class="row">
		<div class="small-6 small-offset-3">

			<div class="panel radius">

				<h2>Login</h2>

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

				<form role="form" method="POST" action="/auth/login">

					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="row">
						<label class="small-10 column">E-Mail Address
							<input type="email" name="email" value="{{ old('email') }}">
						</label>
					</div>

					<div class="row">
						<label class="small-10 column">Password
							<input type="password" name="password">
						</label>
					</div>

					<div class="row">
						<div class="small-10 column">
							<label>
								<input type="checkbox" name="remember"> Remember Me
							</label>
						</div>
					</div>

					<div class="row">
						<div class="small-10 column">
							<a href="/password/email">Forgot Your Password?</a>

							<button class="right" type="submit">Login</button>
						</div>
					</div>

				</form>

			</div>
		</div>
	</div>
</div>
@endsection
