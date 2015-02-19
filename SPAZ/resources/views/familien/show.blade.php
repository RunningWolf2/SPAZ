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
								<th>Anrede</th>
								<td>{{ $familie->anrede }}</td>
							</tr>
							<tr>
								<th>Name</th>
								<td>{{ $familie->name }}</td>
							</tr>
							<tr>
								<th>Straße</th>
								<td>{{ $familie->strasse }}</td>
							</tr>
							<tr>
								<th>Plz</th>
								<td>{{ $familie->plz }}</td>
							</tr>
							<tr>
								<th>Ort</th>
								<td>{{ $familie->ort }}</td>
							</tr>
							<tr>
								<th>Telefon</th>
								<td>{{ $familie->telefon }}</td>
							</tr>
							<tr>
								<th>Mobil</th>
								<td>{{ $familie->mobil }}</td>
							</tr>
							<tr>
								<th>Fax</th>
								<td>{{ $familie->fax }}</td>
							</tr>
							<tr>
								<th>E-Mail</th>
								<td>
									@if ($familie->email)
										<a href="mailto:{{$familie->email}}">{{$familie->email}}</a>
									@endif
								</td>
							</tr>
							<tr>
								<th>Notizen</th>
								<td>{!! nl2br($familie->notizen) !!}</td>
							</tr>
						</tbody>
					</table>
					<table class="small-5 left small-offset-1 columns">
						<tbody>
							<tr>
								<th>Bewilligte Fahrzeit</th>
								<td>{{ $familie->bewilligteFahrzeit }}</td>
							</tr>
							<tr>
								<th>Jugendamt</th>
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
								<th>zugeteilter Mitarbeiter</th>
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
								<th>Start Betreuung</th>
								<td>{{ $familie->start_betreuung }}</td>
							</tr>
							<tr>
								<th>Ende Betreuung</th>
								<td>{{ $familie->end_betreuung }}</td>
							</tr>
							<tr>
								<th>Status</th>
								<td>{{ $familie->status }}</td>
							</tr>
						</tbody>
					</table>

				</div>

				<div class="row content" id="panel_ansprechpartner">
					<div class="columns">
						<!--<p>
								{!! link_to_route(
									'familien_ansprechpartner_path',
									'Ansprechpartner',
									[$familie->id]) !!}
							</p>
						-->
						@include ('familien.ansprechpartner._index_table')
					</div>
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
