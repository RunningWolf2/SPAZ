<?php

use SPAZ\Familie;
use SPAZ\Jugendamt;
use SPAZ\User;

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
Breadcrumbs::register('familie_edit_path', function($breadcrumbs, Familie $familie) {
	$breadcrumbs->parent('familie_path', $familie);
	$breadcrumbs->push('bearbeiten', route('familie_path', $familie->id));
});


/*
 * Jugendämter
 */
// Startseite > Jugendämter
Breadcrumbs::register('jugendaemter_path', function($breadcrumbs) {
	$breadcrumbs->parent('home');
	$breadcrumbs->push('Jugendämter', route('jugendaemter_path'));
});
// Startseite > Jugendämter > Neu
Breadcrumbs::register('jugendamt_create_path', function($breadcrumbs) {
	$breadcrumbs->parent('jugendaemter_path');
	$breadcrumbs->push('Neu', route('jugendaemter_path'));
});
// Startseite > Jugendämter > Jugendamt XY
Breadcrumbs::register('jugendamt_path', function($breadcrumbs, Jugendamt $jugendamt) {
	$breadcrumbs->parent('jugendaemter_path');
	$breadcrumbs->push($jugendamt->name, route('jugendamt_path', $jugendamt->id));
});
// Startseite > Jugendämter > Jugendamt XY > Bearbeiten
Breadcrumbs::register('jugendamt_edit_path', function($breadcrumbs, Jugendamt $jugendamt) {
	$breadcrumbs->parent('jugendamt_path', $jugendamt);
	$breadcrumbs->push('bearbeiten', route('jugendamt_path', $jugendamt->id));
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
