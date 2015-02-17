@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>Neuer Ansprechpartner <small>für {{ $familie->anrede.' '.$familie->name }}</small></h2>

			<div class="radius panel">

				{!! Form::open(['route' => 'familien_ansprechpartner_store_path']) !!}

					{{-- Unsichtbares Feld mit FamilienID hinzufügen. --}}
					{{-- Es wird geprüft, ob die ID existiert, also keine Sorge. --}}

					{!! Form::hidden('ref_familie', $familie->id) !!}

					@include ('familien.ansprechpartner._form')

				{!! Form::close() !!}

			</div>

		</div>
	</div>
</div>

@endsection
