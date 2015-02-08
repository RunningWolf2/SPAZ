@extends('app')

@section('content')
<div style="margin-top:20px;">
	<div class="row">
		<div class="small-4 small-offset-4">

			<div class="panel radius">

				<h2>Reset Password</h2>

				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif

				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif

				<form role="form" method="POST" action="/password/email">

					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="row">
						<label class="small-12 column">E-Mail Address
							<input type="email" name="email" value="{{ old('email') }}">
						</label>
					</div>

					<div class="row">
						<div class="small-12 column">
							<button type="submit" class="right">
								Send Password Reset Link
							</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
@endsection
