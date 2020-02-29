
@extends('_layouts.master')

@section('body')
<body class="body--projects">
	<section class="series_info">
		<h2>How do I get this list automatically from Jigsaw?</h2>
		<p>lorem pictum, greek images, pictem ipsum, lorem pixum, pixel holder, filler text/image, TBD, TK, to come, placeholder, dummy image, hold for, temporary, demonstration only, example, draft, space filler, substitute, stand-in, for the time being, while I build out the website, interim, stopgap, acting, preliminary image, waiting for final image, draft-v1-edit2-almost-final.jpg, boilerplate, not available, replace when available, unfinished documentation, to be documented properly, please stand by</p>

		@include('_partials.series_table', ['seriesArray' => $page->series_boxbots ])
		@include('_partials.series_table', ['seriesArray' => $page->series_daily_photo ])
		@include('_partials.series_table', ['seriesArray' => $page->series_dirty_mousepads ])
		@include('_partials.series_table', ['seriesArray' => $page->series_dots_dots_dots ])

	</section>
@endsection

@section('extra-scripts')
@endsection
