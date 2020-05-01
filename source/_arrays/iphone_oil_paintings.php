<?php

$series_iphone_oil_paintings = [
	'slug'        => 'iphone_oil_paintings',
	'js'          => null,
	'title'       => 'iPhone Oil Paintings',
	'nice_date'   => '2012',
	'status'      => '',
	'description' => '',
	'notes'       => '',
];

$collection_iphone_oil_paintings = [
	'path'    => 'o__o/{collection}/{slug}',
	'sort'    => '-id',
	'extends'          => '{extends}',

	'series_info'         => $series_iphone_oil_paintings,

	'items'   => [
		[
			'extends'     => '_layouts.single-image_viewer',
			'id'          => 'jkk_',
			'title'       => '',
			'subtitle'    => 'Untitled',
			'slug'        => 'untitled-1',
			'medium'      => '',
			'date'        => '2012',
			'height'      => '',
			'width'       => '',
			'units'       => '',
			'description' => '',
			'byline'      => '',
			'status'      => '',
			'notes'       => '',
		],
	],

];
?>
