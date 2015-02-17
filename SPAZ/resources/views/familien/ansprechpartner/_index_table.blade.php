<p>{!! link_to_route('familien_ansprechpartner_create_path', '+ Ansprechpartner hinzufügen', [$familie->id]) !!}</p>

@foreach (SPAZ\FamilienAnsprechpartner::where('ref_familie', '=', $familie->id)->get() as $ansprechpartner)

	<h3>
		{{ $ansprechpartner->anrede.' '.$ansprechpartner->vorname.' '.$ansprechpartner->nachname }}
		<small>
			{!! link_to_route(
				'familien_ansprechpartner_edit_path',
				'',
				[$ansprechpartner->ref_familie, $ansprechpartner->id],
				['class' => 'fa fa-pencil'])
			!!}
			{!! link_to_route(
				'familien_ansprechpartner_edit_path',
				'bearbeiten',
				[$ansprechpartner->ref_familie, $ansprechpartner->id])
			!!}
		</small>
	</h3>

	<table class="table_max">

		<tr>
			<th>Typ</th>
			<td>{{ $ansprechpartner->typ }}</td>
		</tr>
		<tr>
			<th>Straße</th>
			<td>{{ $ansprechpartner->strasse }}</td>
		</tr>
		<tr>
			<th>Plz</th>
			<td>{{ $ansprechpartner->plz }}</td>
		</tr>
		<tr>
			<th>Ort</th>
			<td>{{ $ansprechpartner->ort }}</td>
		</tr>
		<tr>
			<th>Telefon</th>
			<td>{{ $ansprechpartner->telefon }}</td>
		</tr>
		<tr>
			<th>Mobil</th>
			<td>{{ $ansprechpartner->mobil }}</td>
		</tr>
		<tr>
			<th>Fax</th>
			<td>{{ $ansprechpartner->fax }}</td>
		</tr>
		<tr>
			<th>E-Mail</th>
			<td>{{ $ansprechpartner->email }}</td>
		</tr>
		<tr>
			<th>Sonstiges</th>
			<td>{{ $ansprechpartner->sonstiges }}</td>
		</tr>

	</table>

@endforeach

