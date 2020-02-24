@php
$series_info = [
	'title'       => 'The Adaption to My Generation',
	"subtitle"    => "A daily photo project",
	'nice_date'   => '1998 Oct 01–until I’m not',
	'status'      => 'Yes, I am still taking a photo every day.',
	'description' => '<p>JK Keller takes a self-portrait every day for 21+ years (1998 October 1)</p>
		<p>Next video: Nov 2022</p>',
	'notes'       => '',
	'to_dos'      => '',
	'hidden'      => '',
];
@endphp

@extends('_layouts.master')

@section('body')
<body class="body--daily_photo">
	<section class="series_info">
		@include('_partials.series_table', ['seriesArray' => $series_info ])
	</section>

	<section class="series_images">
		@php
			$filtered_photos = $daily_photo->where('imgfile', '!=', '');
		@endphp
<!-- get rid of spacing
			@foreach ($filtered_photos as $photo)
		--><figure>
				<a href="{{ $photo->slug }}">
					<img class="lazyload" src="/x__x/loading-99.gif" data-src="/o__o/daily_photo/x__x/{{ $photo->imgfile }}.jpg" width="150" height="200" alt="{{ $photo->title }}" title="{{ $photo->title }}, {{ $photo->nice_date }}, {{ $photo->height }} × {{ $photo->width }} mm">
				</a>
	 			<figcaption>
					<cite>{{ $photo->title }}</cite>
				</figcaption>

			</figure><!-- get rid of spacing
			@endforeach
	-->

		</div>
	</section>

	@php
		$sorted_daily_photo = $daily_photo->sortBy('id');
	@endphp
	<section class="prj_info">
		@include('_partials.prj_table', ['tableArray' => $sorted_daily_photo])
	</section>

	<div id="popup">
		<img class="img--under" src="/x__x/loading-99.gif" alt="" />
		<img class="img--over" src="/x__x/loading-99.gif" alt="" />
	</div>
@stop

@section('extra-scripts')
	<nav id="feralhog"><a href="/o__o/">Projects</a></nav>
@stop
