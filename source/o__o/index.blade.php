@php
$projects_info = [
	[
		'title'       => 'BoxBots',
		'slug'        => 'boxbots',
		'nice_date'   => '1999–and on',
		'status'      => 'Ongoing',
		'description' => 'embarrassed, but I continue to enjoy making these',
		'notes'       => '<p><a href=\"https://instagram.com/justboxbots\">The grams</a></p>',
	],
	[
		'title'       => 'The Adaption to My Generation',
		'slug'        => 'daily_photo',
		'nice_date'   => '1998–death',
		'status'      => 'ongoing',
		'description' => 'Older and Older',
		'notes'       => 'Next video: 2022',
	],
];
@endphp
@extends('_layouts.master')

@section('body')
<body class="body--projects">
	<section class="series_info">
		@include('_partials.series_table', ['seriesArray' => $projects_info[0] ])
		@include('_partials.series_table', ['seriesArray' => $projects_info[1] ])
	</section>

@endsection

@section('extra-scripts')
@endsection
