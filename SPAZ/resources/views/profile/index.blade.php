@extends('app')


@section('content')

<div class="container">
	<div class="row">
		<div class="small-10 small-offset-1">

			<div class="radius panel">

				<h2>Profil</h2>

				<p>{!! link_to_route('profile_edit_path', 'Bearbeiten') !!}</p>
				<p>Hallo {{ Auth::user()->name }}!</p>

			</div>

		</div>
	</div>
</div>

@endsection
