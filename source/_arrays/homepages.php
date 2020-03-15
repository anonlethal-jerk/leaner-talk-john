<?php

$series_homepages = [
	'slug'        => 'homepages',
	'js'          => null,
	'title'       => 'Homepages I Have Known',
	'nice_date'   => '',
	'status'      => '',
	'description' => 'Past website efforts',
	'notes'       => '',
];

$collection_homepages = [
	'extends' => '_layouts.single-homepages',
	'path'    => 'o__o/{collection}/{slug}',
	'sort'    => '-id',
	'items'   => [
		[
			'id'          => 'jkk_',
			'title'       => 'What’s Your Line of Work?',
			'slug'        => 'fluid_diagonal_line',
			'date'        => '20XX–20XX',
			'description' => 'the trajectory of my work is a fluid line',
			'notes'       => '',
		],
		[
			'id'          => 'jkk_',
			'title'       => 'Socially Embedded',
			'slug'        => 'social_embed',
			'date'        => '20XX–20XX',
			'description' => 'other people talk about my work',
			'notes'       => '',
		],
		[
			'id'          => 'jkk_',
			'title'       => 'Work To Do',
			'slug'        => 'to_dos',
			'date'        => '20XX–20XX',
			'description' => 'my work here is done',
			'notes'       => 'I may come back to this',
		],
		[
			'id'          => 'jkk_',
			'title'       => 'Not Aware, Not Content',
			'slug'        => 'content_aware',
			'date'        => '20XX–20XX',
			'description' => 'trying to find the connective tissue in my work',
			'notes'       => '',
		],
	],

];
?>
