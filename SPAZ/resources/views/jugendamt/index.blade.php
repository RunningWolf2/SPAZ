@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>Jugend&auml;mter</h2>

			<div class="radius panel">

				{!! link_to_route('jugendamt_create_path', '', null, ['class' => 'fa fa-user-plus']) !!}
				{!! link_to_route('jugendamt_create_path', 'Jugendamt hinzufügen') !!}

				<br><br>

				<table class="table_max">
					<thead>
						<tr>
							<th>Name</th>
							<th>Website</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($jugendaemter as $jugendamt)
							<tr>
								<td>{!! link_to_route('jugendamt_path', $jugendamt->name, [$jugendamt->id]) !!}</td>
								<td>{!! link_to($jugendamt->website, $jugendamt->website) !!}</td>
								<td>{!! link_to_route('jugendamt_edit_path', '', [$jugendamt->id], ['class' => 'fa fa-pencil-square-o']) !!}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</div>
	</div>
</div>

@endsection
