@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>{{ $familie->anrede }} {{ $familie->name }} bearbeiten</h2>

			<div class="radius panel">

				<div class="row">

					{!! Form::model($familie, ['route' => ['familie_update_path', $familie->id], 'method' => 'PATCH']) !!}

						@include ('familien._form')

					{!! Form::close() !!}

				</div>

			</div>

		</div>
	</div>
</div>

@endsection
