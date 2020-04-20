<?php

$series_profiles_exchanged = [
	'slug'        => 'profiles_exchanged',
	'js'          => null,
	'title'       => 'You trying to be Me trying to be You',
	'nice_date'   => '',
	'status'      => '',
	'description' => 'Two people’s profile silhouettes are computationally exchanged.',
	'notes'       => '',
];

$collection_profiles_exchanged = [
	'path'    => 'o__o/{collection}/{slug}',
	'sort'    => '-id',
	'extends'          => '{extends}',
	'series_slug'      => $series_profiles_exchanged['slug'],
	'series_title'     => $series_profiles_exchanged['title'],
	'js'               => $series_profiles_exchanged['js'],
	'items'   => [
		[
			'extends'     => '_layouts.single-image_viewer',
			'id'          => 'jkk_',
			'title'       => 'Keetra trying to be JK trying to be Keetra',
			'subtitle'    => '',
			'slug'        => 'keetra_jk',
			'medium'      => '',
			'date'        => '2009',
			'height'      => '',
			'width'       => '',
			'units'       => '',
			'description' => '',
			'status'      => '',
			'notes'       => '',
		],
		[
			'extends'     => '_layouts.single-image_viewer',
			'id'          => 'jkk_',
			'title'       => 'Sid trying to be Paulette trying to be Sid',
			'subtitle'    => '',
			'slug'        => 'sid_paulette',
			'medium'      => '',
			'date'        => '',
			'height'      => '',
			'width'       => '',
			'units'       => '',
			'description' => '',
			'status'      => '',
			'notes'       => '',
		],
	],

];
?>
