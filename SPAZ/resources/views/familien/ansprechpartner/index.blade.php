@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>Ansprechpartner <small>für {{ $familie->anrede . ' ' . $familie->name}}</small></h2>

			<div class="radius panel">

				@include ('familien.ansprechpartner._index_table')

			</div>

		</div>
	</div>
</div>

@endsection
