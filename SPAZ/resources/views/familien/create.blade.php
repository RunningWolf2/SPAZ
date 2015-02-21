@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>Neue Familie</h2>

			<div class="radius panel">

				<div class="row">

					{!! Form::open(['route' => 'familien_store_path']) !!}

						@include ('familien._form')

						{!! Form::submit('Familie speichern', ['class' => 'button']) !!}

					{!! Form::close() !!}

				</div>

			</div>

		</div>
	</div>
</div>

@endsection
