<?php

return [
	'production' => false,
	'baseUrl' => '',

	// page defaults
	'twitter_card_type' => 'summary_large_image',
	'twitter_image'     => null,
	'open_graph_image'  => null,
	'meta_description'  => 'work from JK Keller',
	'person'            => null, // for boxbots
	'nontitle'          => null, // non-cite title
	'title'             => null, // cite title

	'collections' => [
		'posts' => [
			'author' => 'JK',
			'sort' => '-date',
			'path' => 'o__-/{filename}',
		],
		'boxbots',
		'submissions',
		'daily_photo',
		'dots_dots_dots',
		'flat_mountains',

		// 'drawings',
		'dirty_mousepads',
		'arrow_iterations',
		'fucking_windows',
		'homepages',
		'iphone_oil_paintings',
		'layered_wax',
		'profiles_exchanged',
		'profiles_reversed',
		'sd_to_hd',
		'siri_sound_poems',
		'touching_film',
	],
];
