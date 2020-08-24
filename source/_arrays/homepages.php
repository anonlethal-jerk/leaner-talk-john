<?php

$series_homepages = [
	'slug'        => 'homepages',
	'js'          => null,
	'title'       => '',
	'subtitle'    => 'Homepages I Have Known',
	'nice_date'   => '',
	'status'      => '',
	'description' => 'Past website efforts',
	'notes'       => '',
	'pages'   => [
		[
			'title'       => 'What’s Your Line of Work?',
			'slug'        => 'fluid_diagonal_line',
		],
		[
			'title'       => 'Socially Embedded',
			'slug'        => 'social_embed',
		],
		[
			'title'       => 'Work To Do',
			'slug'        => 'to_dos',
		],
		[
			'title'       => 'Not Aware, Not Content',
			'slug'        => 'content_aware',
		],
	],
];

$collection_homepages = [
	'path'    => 'o__o/{collection}/{slug}',
	'sort'    => '-sort_date',
	// 'extends'          => '{extends}',

	'series_info'         => $series_homepages,

	'items'   => [
		[
			'id'          => '',
			'title'       => 'What’s Your Line of Work?',
			'slug'        => 'fluid_diagonal_line',
			'sort_date'   => '2003_01_01',
			'nice_date'   => '20XX–20XX',
			'description' => 'the trajectory of my work is a fluid line',
			'notes'       => '',
		],
		[
			'id'          => '',
			'title'       => 'Socially Embedded',
			'slug'        => 'social_embed',
			'sort_date'   => '2002_01_01',
			'nice_date'   => '20XX–20XX',
			'description' => 'other people talk about my work',
			'notes'       => '',
		],
		[
			'id'          => '',
			'title'       => 'Work To Do',
			'slug'        => 'to_dos',
			'sort_date'   => '2001_01_01',
			'nice_date'   => '20XX–20XX',
			'description' => 'my work here is done',
			'notes'       => 'I may come back to this',
		],
		[
			'id'          => '',
			'title'       => 'Not Aware, Not Content',
			'slug'        => 'content_aware',
			'sort_date'   => '2000_01_01',
			'nice_date'   => '20XX–20XX',
			'description' => 'trying to find the connective tissue in my work',
			'notes'       => '',
		],
	],

];
?>
