<?php

$series_arrow_iterations = [
	'slug'        => 'arrow_iterations',
	'js'          =>  null,
	'title'       => 'Binary’s Forth Fugue',
	'description' => 'Iterating through movements and variations by branching of Fugue icons',
	'nice_date'   => '2011',
	'status'      => 'reworking the After Effects files... scripting',
	'notes'       => '<p>An exploration in the generative potential of found digital imagery. Using only the 122 icons labeled "arrow" from <a href="http://p.yusukekamiyamane.com/">Yusuke Kamiyamane</a>’s amazingly thorough <cite>Fugue Icons</cite> set, I was able to create a set of animations similar to L-system growth models. The directional path of the arrow attempts to find a forward progression in mounting uncertainty & indecisiveness, eventually bowing to the emergent cacophony of the powers of 2. The 2 movements and 9 variations take the viewer from a single looping path through a few of the 24 branching choices to the eventual climax of 67’108’864 possible end points (if my math is correct). In theory, from just 24 branching choices, it’s possible to create 7’060’738’412’025 different decision-branch animations (again, if I’m correct in my maths).</p>',
	'hidden'       => '<p>emergence is persistent</p>
		<p>doing this via javascript & canvas doesn’t seem like the best option. It’s slow once you branch a few times.</p>
		<p>Maybe processing?</p>
		<p>OR, could I script After Effects to create comps?</p>
		<p>build over or under? little difference as the first branch (a) always under first branch (b) so each branch isn’t really under the previous.</p>
		"<cite>Movement #1, Variation #1</cite>, 2011",
		"<cite>Movement #2, Variation #2</cite>, 2011",
		"<cite>Movement #2, Variation #3</cite>, 2011",
		"<cite>Movement #2, Variation #4</cite>, 2011",
		"<cite>Movement #1, Variation #5</cite>, 2011",
		"<cite>Movement #2, Variation #6</cite>, 2011",
		"<cite>Movement #2, Variation #7</cite>, 2011",
		"<cite>Movement #2, Variation #8</cite>, 2011",
		"<cite>Movement #1, Variation #9</cite>, 2011",
		"<cite>Movement #2, Variation #9</cite>, 2011"
		',
];

$collection_arrow_iterations = [
	'path' => 'o__o/{collection}/{slug}',
	'sort' => '-id',
	'extends'          => '{extends}',

	'series_info'         => $series_arrow_iterations,

	'items' => [
		[
			'extends'     => '_layouts.series-image_viewer',
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
			'extends'     => '_layouts.series-image_viewer',
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
