@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<div class="radius panel">
				<h2>Familien</h2>

				{!! link_to_route('familie_create_path', 'Hinzufügen') !!}

				<br><br>

				<ul>
					@foreach ($familien as $familie)
						<li>
							{!! link_to_route('familie_path', $familie->name, [$familie->id]) !!}
						</li>
					@endforeach
				</ul>
			</div>

		</div>
	</div>
</div>

@endsection
