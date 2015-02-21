@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>Mitarbeiter</h2>

			<div class="radius panel">

				<table class="table_max">
					<thead>
						<tr>
							<th>Anrede</th>
							<th>Vorame</th>
							<th>Nachname</th>
							<th>E-Mail</th>
							<th>Fachl.-Std.</th>
							<th>Aktiv</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr class="{{ (Auth::user()->id == $user->id) ? 'bold' : '' }}">
								<td>{{ $user->anrede }}</td>
								<td>{!! link_to_route('user_path', $user->vorname, [$user->id]) !!}</td>
								<td>{!! link_to_route('user_path', $user->nachname, [$user->id]) !!}</td>
								<td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
								<td>{{ $user->netto_fachleistungsstunden }}</td>
								<td>{{ $user->aktiv ? 'Ja' : 'Nein' }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>

@endsection
