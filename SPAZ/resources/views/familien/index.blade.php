@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>Familien</h2>

			<div class="radius panel">

				{!! link_to_route('familie_create_path', '', null, ['class' => 'fa fa-user-plus']) !!}
				{!! link_to_route('familie_create_path', 'Familie hinzufügen') !!}

				<br><br>

				<table class="table_max">
					<thead>
						<tr>
							<th>Anrede</th>
							<th>Name</th>
							<th>Beginn</th>
							<th>Ende</th>
							<th>Ort</th>
							<th>Zuständig</th>
							<th>Jugendamt</th>
							<th>Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($familien as $familie)
							<tr>
								<td>{{ $familie->anrede }}</td>
								<td>{!! link_to_route('familie_path', $familie->name, [$familie->id]) !!}</td>
								<td>{{ $familie->beginn }}</td>
								<td>{{ $familie->ende }}</td>
								<td>{{ $familie->ort }}</td>
								<td>
									@if (isset($familie->ref_mitarbeiter))
										{!! link_to_route(
												'user_path',
												SPAZ\User::findOrFail($familie->ref_mitarbeiter)->name,
												[$familie->ref_mitarbeiter])
										!!}
									@endif
								</td>
								<td>@if (isset($familie->ref_jugendamt))
										{!!
											link_to_route(
												'jugendamt_path',
												SPAZ\Jugendamt::find($familie->ref_jugendamt)->name,
												[$familie->ref_jugendamt]
											)
										!!}
									@endif
								</td>
								<td>{{ $familie->status }}</td>
								<td>{!! link_to_route('familie_edit_path', '', [$familie->id], ['class' => 'fa fa-pencil-square-o']) !!}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>

@endsection
