@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<div class="radius panel">

				<h2>{{ $familie->anrede }} {{ $familie->name }}</h2>

				{!! link_to_route('familien_edit_path', 'Bearbeiten', [$familie->id]) !!}

				@if ($familie->notizen)

					<p>{!! nl2br($familie->notizen) !!}</p>

				@endif



			</div>
			{!! link_to_route('familien_path', 'Zurück zu Familien') !!}
		</div>
	</div>
</div>

@endsection
