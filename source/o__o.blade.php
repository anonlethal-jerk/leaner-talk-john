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
];
@endphp

@extends('_layouts.master')

@section('body')
<body class="body--projects">
	<section class="series_info">
		<h2>How do I get this list automatically from Jigsaw?</h2>

		@foreach ($projects_info as $project)
			@include('_partials.series_table', ['seriesArray' => $project ])
		@endforeach

		@include('_partials.series_table', ['seriesArray' => $page->series_daily_photo ])
		@include('_partials.series_table', ['seriesArray' => $page->series_dirty_mousepads ])
		@include('_partials.series_table', ['seriesArray' => $page->series_dots_dots_dots ])

	</section>
@endsection

@section('extra-scripts')
@endsection
