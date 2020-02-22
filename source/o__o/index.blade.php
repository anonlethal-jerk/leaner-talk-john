@php
$projects_info = [
		'title'       => 'BoxBots',
		'slug'        => 'boxbots',
		'nice_date'   => '1999–',
		'status'      => 'Ongoing',
		'description' => 'embarrassed, but I continue to enjoy making these',
		'notes'       => '<p><a href=\"https://instagram.com/justboxbots\">The grams</a></p>',

];
@endphp
@extends('_layouts.master')

@section('body')
<body class="body--projects">
	<section class="series_info">
		@include('_partials.series_table', ['seriesArray' => $projects_info ])
	</section>

@endsection

@section('extra-scripts')
@endsection
