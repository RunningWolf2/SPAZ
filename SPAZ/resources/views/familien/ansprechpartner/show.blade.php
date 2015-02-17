@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>
				{{ $familie->anrede }} {{ $familie->name }}
				{!! link_to_route('familie_edit_path', '', [$familie->id], [
					'class' => 'fa fa-pencil-square-o',
					'style' => 'font-size:1.8rem;'
				]) !!}
			</h2>

			<div class="radius panel">

				<ul class="tabs" data-tab>
					<li class="tab-title active"><a href="#panel_familie">Familie</a></li>
					<li class="tab-title"><a href="#panel_ansprechpartner">Ansprechpartner</a></li>
					<li class="tab-title"><a href="#panel_weitere_adressen">Weitere Adressen</a></li>
				</ul>

				<div class="tabs-content">
				<div class="content active" id="panel_familie">

					<table class="small-6 left columns">
						<tbody>
							<tr>
								<td>Anrede</td>
								<td>{{ $familie->anrede }}</td>
							</tr>
							<tr>
								<td>Name</td>
								<td>{{ $familie->name }}</td>
							</tr>
							<tr>
								<td>Straße</td>
								<td>{{ $familie->strasse }}</td>
							</tr>
							<tr>
								<td>Plz</td>
								<td>{{ $familie->plz }}</td>
							</tr>
							<tr>
								<td>Ort</td>
								<td>{{ $familie->ort }}</td>
							</tr>
							<tr>
								<td>Telefon</td>
								<td>{{ $familie->telefon }}</td>
							</tr>
							<tr>
								<td>Mobil</td>
								<td>{{ $familie->mobil }}</td>
							</tr>
							<tr>
								<td>Fax</td>
								<td>{{ $familie->fax }}</td>
							</tr>
							<tr>
								<td>E-Mail</td>
								<td>{{ $familie->email }}</td>
							</tr>
							<tr>
								<td>Notizen</td>
								<td>{!! nl2br($familie->notizen) !!}</td>
							</tr>
						</tbody>
					</table>
					<table class="small-5 left small-offset-1 columns">
						<tbody>
							<tr>
								<td>Bewilligte Fahrzeit</td>
								<td>{{ $familie->bewilligteFahrzeit }}</td>
							</tr>
							<tr>
								<td>Jugendamt</td>
								<td>@if (isset($familie->ref_jugendamt) && $familie->ref_jugendamt != 0)
										{!!
											link_to_route(
												'jugendamt_path',
												SPAZ\Jugendamt::findOrFail($familie->ref_jugendamt)->name,
												[$familie->ref_jugendamt]
											)
										!!}
									@endif
								</td>
							</tr>
							<tr>
								<td>zugeteilter Mitarbeiter</td>
								<td>@if (isset($familie->ref_mitarbeiter) && $familie->ref_mitarbeiter != 0)
										{!!
											link_to_route(
												'user_path',
												SPAZ\User::findOrFail($familie->ref_mitarbeiter)->name,
												[$familie->ref_mitarbeiter]
											)
										!!}
									@endif
								</td>
							</tr>
							<tr>
								<td>Start Betreuung</td>
								<td>{{ $familie->start_betreuung }}</td>
							</tr>
							<tr>
								<td>Ende Betreuung</td>
								<td>{{ $familie->end_betreuung }}</td>
							</tr>
							<tr>
								<td>Status</td>
								<td>{{ $familie->status }}</td>
							</tr>
						</tbody>
					</table>

				</div>

				<div class="row content" id="panel_ansprechpartner">
					<p>Ansprechpartner</p>
				</div>

				<div class="row content" id="panel_weitere_adressen">
					<p>Weitere Adressen</p>
				</div>

				</div>

				<div class="clearfix"></div>

			</div>
		</div>
	</div>
</div>

@endsection
