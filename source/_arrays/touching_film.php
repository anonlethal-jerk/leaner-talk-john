<?php

$series_touching_film = [
	'slug'        => 'touching_film',
	'js'          => null,
	'title'       => 'Gleaning the Fifth Screen',
	'subtitle'    => 'touching film interfaces',
	'nice_date'   => '',
	'status'      => '',
	'description' => '',
	'notes'       => '',
];

$collection_touching_film = [
	'extends' => '_layouts.single-touching_film',
	'path'    => 'o__o/{collection}/{slug}',
	'sort'    => '-id',
	'items'   => [
		[
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
