@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<div class="radius panel">

				<h2>Profil <small>{!! link_to_route('profile_edit_path', 'Bearbeiten') !!}</small></h2>

				<p>Hallo {{ Auth::user()->vorname }}!</p>

				<p>Hier sind alle deine Daten aufgelistet:</p>

				<table class="small-6 columns">
					<tbody>
						<tr>
							<th>Anrede</th>
							<td>{{ Auth::user()->anrede }}</td>
						</tr>
						<tr>
							<th>Vorname</th>
							<td>{{ Auth::user()->vorname }}</td>
						</tr>
						<tr>
							<th>Nachname</th>
							<td>{{ Auth::user()->nachname }}</td>
						</tr>
						<tr>
							<th>E-Mail</th>
							<td><a href="mailto:{{Auth::user()->email}}">{{ Auth::user()->email }}</a></td>
						</tr>
						<tr>
							<th>Aktiv</th>
							<td>{{ Auth::user()->aktiv ? 'Ja' : 'Nein' }}</td>
						</tr>
						<tr>
							<th>Netto Fachleistungsstunden</th>
							<td>{{ Auth::user()->netto_fachleistungsstunden }} Std./Woche</td>
						</tr>
					</tbody>
				</table>

				<div class="clearfix"></div>

			</div>

		</div>
	</div>
</div>

@endsection
