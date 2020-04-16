@php
$t_series = 'Projects';
$page->meta_description = 'work done by JK Keller';
$page->twitter_image = 'https://jk-keller.com/x__x/jk_keller-home-twitter-1024x512.png';
$page->open_graph_image = 'https://jk-keller.com/x__x/jk_keller-home-open_graph-1200x630.png';
@endphp

@extends('_layouts.master')

@section('body')
<body class="body--projects">
	<section class="series_info">
		<h2>You must go on.<br>
		I can’t go on.</h2>
{{-- 		<h2>How do I get this list automatically from Jigsaw?</h2>
		<p>"Temp image from migration..." lorem pictum, greek images, pictem ipsum, lorem pixum, pixel holder, filler text/image, TBD, TK, to come, placeholder, dummy image, hold for, temporary, demonstration only, example, draft, space filler, substitute, stand-in, for the time being, while I build out the website, interim, stopgap, acting, preliminary image, waiting for final image, draft-v1-edit2-almost-final.jpg, boilerplate, not available, replace when available, unfinished documentation, to be documented properly, please stand by</p>
 --}}
		@include('_partials.projects_table', ['seriesArray' => $page->series_boxbots, 'seriesHead' => true])
		@include('_partials.projects_table', ['seriesArray' => $page->series_daily_photo ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_dirty_mousepads ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_dots_dots_dots ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_arrow_iterations ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_flat_mountains ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_fucking_windows ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_iphone_oil_paintings ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_layered_wax ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_profiles_exchanged ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_profiles_reversed ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_sd_to_hd ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_siri_sound_poems ])
		@include('_partials.projects_table', ['seriesArray' => $page->series_touching_film ])

		@include('_partials.projects_table', ['seriesArray' => $page->series_homepages, 'seriesHead' => true])
{{--
 --}}
		<h2>I’ll go on.</h2>
		<p class="punchlist"><a href="/(@)__(@)/">punchlist</a></p>
	</section>
@endsection

@section('extra-scripts')
@endsection
