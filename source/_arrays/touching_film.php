<?php

$series_touching_film = [
	'slug'        => 'touching_film',
	'js'          => null,
	'title'       => 'Gleaning the Fifth Screen',
	'nice_date'   => '',
	'status'      => '',
	'description' => 'touching film interfaces',
	'notes'       => '',
];

$collection_touching_film = [
	'path'    => 'o__o/{collection}/{slug}',
	'sort'    => '-id',
	'extends'          => '{extends}',
	'series_slug'      => $series_touching_film['slug'],
	'series_title'     => $series_touching_film['title'],
	'js'               => $series_touching_film['js'],
	'items'   => [
		[
			'extends'     => '_layouts.single-image_viewer',
			'id'          => 'jkk_',
			'title'       => 'Minority Report',
			'subtitle'    => '',
			'slug'        => 'gleaning_minority_report',
			'medium'      => 'video',
			'date'        => '2012',
			'height'      => '1080',
			'width'       => '1920',
			'units'       => 'px',
			'minutes'     => '10',
			'seconds'     => '25',
			'notes'       => 'don’t think those dimensions are correct',
		],
	],

];
?>
