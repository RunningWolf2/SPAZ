@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>Neues Jugendamt</h2>

			<div class="radius panel">

				{!! Form::open(['route' => 'jugendamt_store_path']) !!}

					@include ('jugendamt._form')

				{!! Form::close() !!}

			</div>

		</div>
	</div>
</div>

@endsection
