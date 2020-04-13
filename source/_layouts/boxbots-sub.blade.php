@php
	$t_series_array = $page->series_boxbot_submissions;
	$t_slug         = $page->series_boxbot_submissions->slug;
	$t_series       = $page->series_boxbot_submissions->title;
	$t_js           = $page->series_boxbot_submissions->js;
	$t_meta_description = 'submissions from around the world';
@endphp

@extends('_layouts.master')

@section('body')
<body class="body--series body--boxbots body--submissions images--{{ $toggleCurrent }}s">
	{{-- page: {{ $page->testvar }} --}}
	{{-- boxbots: {{ $submissions->first()->testvar }} --}}
	<section class="series_info">
		@include('_partials.series_table', ['seriesArray' => $t_series_array, 'seriesHead' => true ])
	</section>

	<section class="images images--boxbots images--{{ $toggleCurrent }}">
		<nav class="nav--boxbots">
			<button id="btn--toggle">{{ $toggleOther }}</button>
			<span id="label--sortby">sort by:</span>
			<div class="btn-group--sortby">
				<button id="btn--date" class="sort--desc">date</button>
				{{-- <button id="btn--rating">rating</button> --}}
			</div>
		</nav>

		<div id="sort--bots">

<!-- get rid of spacing
			@foreach ($submissions as $boxbot)
			--><figure>
					<a href="{{ $boxbot->slug }}/">
					<img class="{{ $toggleOther }} lazyload" src="/x__x/loading-99.gif" data-src="/o__o/boxbots/submissions/x__x/{{ $toggleOther }}-small/{{ $boxbot->imgfile }}.{{ $toggleOther == 'color' ? 'jpg' : 'png' }}" width="{{ $boxbot->small_width_px }}" height="{{ $boxbot->small_height_px }}" alt="{{ $boxbot->title != '' ? $boxbot->title : 'Untitled' }} BoxBot" title="{{ $boxbot->title != '' ? $boxbot->title : 'Untitled' }}, by {{ $boxbot->person }}, {{ $boxbot->nice_date }}">
					<img class="{{ $toggleCurrent }} lazyload" src="/x__x/loading-99.gif" data-src="/o__o/boxbots/submissions/x__x/{{ $toggleCurrent }}-small/{{ $boxbot->imgfile }}.{{ $toggleCurrent == 'color' ? 'jpg' : 'png' }}" width="{{ $boxbot->small_width_px }}" height="{{ $boxbot->small_height_px }}" alt="{{ $boxbot->title != '' ? $boxbot->title : 'Untitled' }} BoxBot" title="{{ $boxbot->title != '' ? $boxbot->title : 'Untitled' }}, by {{ $boxbot->person }}, {{ $boxbot->nice_date }}">
				</a>
				<div class="sort--hide">
					<p class="sort--title">{{ $boxbot->title != '' ? $boxbot->title : 'Untitled' }}</p>
					<p class="sort--date">{{ $boxbot->id }}</p>
					<p class="sort--rating">{{ $boxbot->jk_rating }}</p>
				</div>

			</figure><!-- get rid of spacing
			@endforeach
	-->

		</div>
	</section>

	@php
		$sorted_boxbots = $submissions->sortBy('id');
	@endphp
	<section class="prj_info">
		@include('_partials.prj_table', ['tableArray' => $sorted_boxbots])
	</section>

	<div id="popup">
		<img class="img--under" src="/x__x/loading-99.gif" alt="" />
		<img class="img--over" src="/x__x/loading-99.gif" alt="" />
	</div>
@stop

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="/o__o/boxbots/">BoxBots</a></nav>
@endsection
@section('extra-scripts')
	<script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script>
@stop