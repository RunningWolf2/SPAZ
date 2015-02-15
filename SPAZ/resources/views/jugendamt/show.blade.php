@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>
				{{ $jugendamt->name }}
				{!! link_to_route('jugendamt_edit_path', '', [$jugendamt->id], [
					'class' => 'fa fa-pencil-square-o',
					'style' => 'font-size:1.8rem;'
				]) !!}
			</h2>

			<div class="radius panel">

				<table class="small-6 columns">
					<tbody>
						<tr>
							<td>Name</td>
							<td>{{ $jugendamt->name }}</td>
						</tr>
						<tr>
							<td>Website</td>
							<td>{{ $jugendamt->website }}</td>
						</tr>
					</tbody>
				</table>

				<div class="clearfix"></div>

			</div>

		</div>
	</div>
</div>

@endsection
