<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="/css/app.css" rel="stylesheet">

	<script src="/js/app_head.js"></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>


	<nav class="top-bar" data-topbar role="navigation">

		<ul class="title-area">
			<li class="name">
				<h1><a href="/">Johannesburg GmbH</a></h1>
			</li>
			<li class="toggle-topbar menu-icon">
				<a href="#"><span>Menu</span></a>
			</li>
		</ul>


		<section class="top-bar-section">

			<!-- Left Nav Section -->
			<ul class="left">
				<li><a href="/">Home</a></li>

				@if (Auth::check())

					<li class="has-dropdown">
						<a href="#">Familien</a>
						<ul class="dropdown">
							<li>{!! link_to_route('familien_path', 'Übersicht') !!}</li>
							<li>{!! link_to_route('familie_create_path', 'Neu') !!}</li>
						</ul>
					</li>

					<li class="has-dropdown">
						<a href="#">Jugend&auml;mter</a>
						<ul class="dropdown">
							<li>{!! link_to_route('jugendaemter_path', 'Übersicht') !!}</li>
							<li>{!! link_to_route('jugendamt_create_path', 'Neu') !!}</li>
						</ul>
					</li>

				@endif

			</ul>

			<!-- Right Nav Section -->
			<ul class="right">

				@if (Auth::guest())
					<li><a href="/auth/login">Login</a></li>
					<li><a href="/auth/register">Register</a></li>
				@else
					<li class="has-dropdown">
						<a href="#">{{ Auth::user()->vorname }}</a>
						<ul class="dropdown">
							<li>{!! link_to_route('profile_path', 'Mein Profil') !!}</li>
							<li><a href="/auth/logout">Logout</a></li>
						</ul>
					</li>
				@endif

			</ul>
		</section>

	</nav>

	<?php
		/* Nur zeigen, wenn die Route auch einen Namen hat. Sonst gäbe es nämlich einen Fehler */
	?>

	@if (Route::currentRouteName())
		{!! Breadcrumbs::renderIfExists() !!}
	@else
		<nav class="breadcrumbs"></nav>
	@endif

	@yield('content')

	<!-- Scripts -->
	<script src="/js/app.js"></script>

	<script> $(document).foundation(); </script>
</body>
</html>
