<?php

$series_sd_to_hd = [
	'slug'        => 'sd_to_hd',
	'js'          => null,
	'title'       => 'Resolution Dependents',
	'subtitle'    => 'SD to HD',
	'nice_date'   => '2014–2015',
	'status'      => '',
	'description' => '',
	'notes'       => '',
];

$collection_sd_to_hd = [
	'path'    => 'o__o/{collection}/{slug}',
	'sort'    => '-id',
	'extends'          => '{extends}',

	'series_info'         => $series_sd_to_hd,

	'items'   => [
		[
			'extends'     => '_layouts.series-image_viewer',
			'id'          => 'jkk_201504_1',
			'title'       => 'animAtORs rEdraw old SimPsons epIsodeS fOr hdTv',
			'subtitle'    => 's20-e09 Lisa the Drama Queen',
			'slug'        => 'simpsons-s20-e09-lisa_the_drama_queen',
			'medium'      => 'video',
			'height'      => '1080',
			'width'       => '1920',
			'units'       => 'px',
			'date'        => '2014',
			'minutes'     => '21',
			'seconds'     => '39',
			'notes'       => 'the last episode done in SD',
		],
		[
			'extends'     => '_layouts.series-image_viewer',
			'id'          => 'jkk_201504_2',
			'title'       => 'NEw alGOriTHm USed To RemastEr seInfEld epIsoDeS iN hD',
			'subtitle'    => 's09-e06 The Merv Griffin Show',
			'slug'        => 'seinfeld-s09-e06-the_merv_griffin_show',
			'medium'      => 'video',
			'height'      => '1080',
			'width'       => '1920',
			'units'       => 'px',
			'date'        => '2014',
			'minutes'     => '22',
			'seconds'     => '39',
		],
		[
			'extends'     => '_layouts.series-image_viewer',
			'id'          => 'jkk_201505_1',
			'title'       => 'hiGh-Def IS cOMing to x-FileS’ digiTaL releasE',
			'subtitle'    => 's02-e03 - Blood',
			'slug'        => 'x_files-s02-e03-blood',
			'height'      => '1080',
			'width'       => '1920',
			'units'       => 'px',
			'medium'      => 'video',
			'date'        => '2015',
			'minutes'     => '45',
			'seconds'     => '25',
		],
		[
			'extends'     => '_layouts.series-image_viewer',
			'id'          => 'jkk_201504_3',
			'title'       => 'STar trEk TO bE RErelEAsed iN VERtIcAL CINeMa ForMat (coMMErciAl)',
			'subtitle'    => 'commerical',
			'slug'        => 'star_trek-commerical',
			'height'      => '1920',
			'width'       => '1080',
			'units'       => 'px',
			'medium'      => 'video',
			'date'        => '2015',
			'minutes'     => '1',
			'seconds'     => '13',
		],
		[
			'extends'     => '_layouts.series-image_viewer',
			'id'          => 'jkk_201505_2',
			'title'       => 'LEaKeD TesT footagE frOM seiNfelD RemaSter In hiGh-defiNiTiON',
			'subtitle'    => 's04-e22 The Handicap Spot',
			'slug'        => 'seinfeld-s04-e22-the_handicap_spot',
			'medium'      => 'video',
			'height'      => '1080',
			'width'       => '1920',
			'units'       => 'px',
			'date'        => '2014',
			'minutes'     => '22',
			'seconds'     => '03',
		],
	]

];
?>
