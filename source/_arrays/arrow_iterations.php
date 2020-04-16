<?php

$series_arrow_iterations = [
	'slug'        => 'arrow_iterations',
	'js'          => null,
	'title'       => 'Binary’s Forth Fugue',
	'subtitle'    => '',
	'nice_date'   => '',
	'status'      => '',
	'description' => 'Iterating through variations & branching of Fugue icons',
	'notes'       => '<p>emergence is persistent</p>

		<p>doing this via javascript & canvas doesn’t seem like the best option. It’s slow once you branch a few times.</p>

		<p>Maybe processing?</p>

		<p>OR, could I script After Effects to create comps?</p>

		<p>build over or under? little difference as the first branch (a) always under first branch (b) so each branch isn’t really under the previous.</p>',
];

$collection_arrow_iterations = [
	'path' => 'o__o/{collection}/{slug}',
	'sort' => '-id',
	'extends'          => '{extends}',
	'series_slug'      => $series_arrow_iterations['slug'],
	'series_title'     => $series_arrow_iterations['title'],
	'js'               => $series_arrow_iterations['js'],
	'items' => [
		[
			'extends'     => '_layouts.single-image_viewer',
			'id'          => 'jkk_',
			'title'       => 'Movement #1, Variation #1',
			'subtitle'    => '',
			'slug'        => 'movement-01-variation-001',
			'medium'      => 'video/animated gif',
			'height'      => '1000',
			'width'       => '1000',
			'units'       => 'px',
			'date'        => '2011',
			'minutes'     => '00',
			'seconds'     => '00',
		],
		[
			'extends'     => '_layouts.single-image_viewer',
			'id'          => 'jkk_',
			'title'       => 'Binary’s End State',
			'subtitle'    => '67’108’864 arrows',
			'slug'        => 'binarys_end_state',
			'medium'      => 'inkjet print maybe?',
			'height'      => '1000',
			'width'       => '1000',
			'units'       => 'px',
			'date'        => '2011',
			'minutes'     => '',
			'seconds'     => '',
		],
	],

];
?>
