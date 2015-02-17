@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>
				{{ $ansprechpartner->anrede.' '.$ansprechpartner->vorname.' '.$ansprechpartner->nachname }}
				bearbeiten
				<small>Ansprechpartner von {{ $familie->anrede }} {{ $familie->name }}</small>
			</h2>

			<div class="radius panel">

				{!!
					Form::model($ansprechpartner, [
						'route' => ['familien_ansprechpartner_update_path', $ansprechpartner->id],
						'method' => 'PATCH'
					])
				!!}

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
