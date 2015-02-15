@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>{{ $jugendamt->anrede }} {{ $jugendamt->name }} bearbeiten</h2>

			<div class="radius panel">

				{!! Form::model($jugendamt, ['route' => ['jugendamt_update_path', $jugendamt->id], 'method' => 'PATCH']) !!}

					@include ('jugendamt._form')

				{!! Form::close() !!}

			</div>

		</div>
	</div>
</div>

@endsection
