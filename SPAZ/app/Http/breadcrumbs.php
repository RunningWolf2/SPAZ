<?php

use SPAZ\Familie;

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
	$breadcrumbs->push('Startseite', route('home'));
});

/*
 * Familien
 */
// Startseite > Familien
Breadcrumbs::register('familien_path', function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Familien', route('familien_path'));
});
// Startseite > Familien > Neu
Breadcrumbs::register('familie_create_path', function($breadcrumbs) {
	$breadcrumbs->parent('familien_path');
	$breadcrumbs->push('Neu', route('familien_path'));
});
// Startseite > Familien > Mustermann
Breadcrumbs::register('familie_path', function($breadcrumbs, Familie $familie) {
	$breadcrumbs->parent('familien_path');
	$breadcrumbs->push($familie->anrede.' '.$familie->name, route('familie_path', $familie->id));
});
// Startseite > Familien > Mustermann > Bearbeiten
Breadcrumbs::register('familien_edit_path', function($breadcrumbs, Familie $familie) {
	$breadcrumbs->parent('familie_path', $familie);
	$breadcrumbs->push('bearbeiten', route('familie_path', $familie->id));
});


// Startseite > Profil
Breadcrumbs::register('profile_path', function($breadcrumbs)
{
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Profil', route('profile_path'));
});
// Startseite > Profil > Bearbeiten
Breadcrumbs::register('profile_edit_path', function($breadcrumbs)
{
	$breadcrumbs->parent('profile_path');
	$breadcrumbs->push('Bearbeiten', route('profile_edit_path'));
});
