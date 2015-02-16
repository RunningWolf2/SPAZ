@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<h2>{{ $user->name }}</h2>

			<div class="radius panel">

				<table class="small-6 columns">
					<tbody>
						<tr>
							<td>Name</td>
							<td>{{ $user->name }}</td>
						</tr>
					</tbody>
				</table>

				<div class="clearfix"></div>

			</div>

		</div>
	</div>
</div>

@endsection
