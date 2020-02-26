
@extends('_layouts.master')

@section('body')
<body class="body--projects">
	<section class="series_info">
		<h2>How do I get this list automatically from Jigsaw?</h2>

		@include('_partials.series_table', ['seriesArray' => $page->series_boxbots ])
		@include('_partials.series_table', ['seriesArray' => $page->series_daily_photo ])
		@include('_partials.series_table', ['seriesArray' => $page->series_dirty_mousepads ])
		@include('_partials.series_table', ['seriesArray' => $page->series_dots_dots_dots ])

	</section>
@endsection

@section('extra-scripts')
@endsection
