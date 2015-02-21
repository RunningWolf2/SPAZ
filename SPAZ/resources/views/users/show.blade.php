@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>Profil von {{ $user->vorname.' '.$user->nachname }}</h2>

			<div class="radius panel">

				<table class="small-6 columns">
					<tbody>
						<tr>
							<th>Anrede</th>
							<td>{{ $user->anrede }}</td>
						</tr>
						<tr>
							<th>Vorname</th>
							<td>{{ $user->vorname }}</td>
						</tr>
						<tr>
							<th>Nachname</th>
							<td>{{ $user->nachname }}</td>
						</tr>
						<tr>
							<th>E-Mail</th>
							<td><a href="mailto:{{$user->email}}">{{ $user->email }}</a></td>
						</tr>
						<tr>
							<th>Aktiv</th>
							<td>{{ $user->aktiv ? 'Ja' : 'Nein' }}</td>
						</tr>
						<tr>
							<th>Netto Fachleistungsstunden</th>
							<td>{{ $user->netto_fachleistungsstunden }} Std./Woche</td>
						</tr>
					</tbody>
				</table>

				<div class="clearfix"></div>

			</div>

		</div>
	</div>
</div>

@endsection
