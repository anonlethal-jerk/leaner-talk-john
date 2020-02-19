@php
	$series_info = [
			'title' => 'BoxBots',
			'description' => 'more info on Boxbots',
			'status' => 'status',
			'notes' => 'notes',
		];
@endphp
@extends('_layouts.master')

@section('body')
<body class="body--boxbots images--{{ $toggleCurrent }}s">
	<h1>{{ $boxbots->count() }} Boxbots</h1>

	<section class="series_info">
	@include('_partials.series_table', ['seriesArray' => $series_info ])
	</section>

<section class="images images--boxbots images--{{ $toggleCurrent }}">
	<nav class="nav--boxbots">
		<button id="btn--toggle">{{ $toggleOther }}</button>
		<span>sort by:</span>
		<button id="btn--date" class="sort--desc">date</button>
		<button id="btn--title">title</button>
		<button id="btn--height">height</button>
		<button id="btn--width">width</button>
		{{-- <button id="btn--rating">rating</button> --}}
	</nav>

	<div id="sort--bots">

@php
$filtered_boxbots = $boxbots->where('height', '!=', 0);
@endphp
<!--
	@foreach ($filtered_boxbots as $boxbot)
		--><figure>
		@if ( $boxbot->offsetbottompx < 0 )
			<a style="bottom:{{ $boxbot->offsetbottompx }}" href="{{ $boxbot->slug }}">
		@else
			<a href="{{ $boxbot->slug }}">
		@endif
		@if ( $boxbot->height > 0 )
				<img class="{{ $toggleOther }} lazyload" src="/x__x/loading-99.gif" data-src="/o__o/boxbots/x__x/{{ $toggleOther }}-small/{{ $boxbot->imgfile }}.png" width="{{ $boxbot->percenthalfwidthpx }}" height="{{ $boxbot->percenthalfheightpx }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm">
				<img class="{{ $toggleCurrent }} lazyload" src="/x__x/loading-99.gif" data-src="/o__o/boxbots/x__x/{{ $toggleCurrent }}-small/{{ $boxbot->imgfile }}.png" width="{{ $boxbot->percenthalfwidthpx }}" height="{{ $boxbot->percenthalfheightpx }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm">
			</a>
			<div class="sort--hide">
				<p class="sort--title">{{ $boxbot->title }}</p>
				<p class="sort--date">{{ $boxbot->id }}</p>
				<p class="sort--height">{{ $boxbot->height }}</p>
				<p class="sort--width">{{ $boxbot->width }}</p>
				<p class="sort--rating">{{ $boxbot->rating }}</p>
			</div>
		@else
				<img class="empty" src="/x__x/loading-99.gif" width="49" height="49" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, TK × TK mm">
			</a>
			<div class="sort--hide" style="color:#f00;">
				<p class="sort--title">{{ $boxbot->title }}</p>
				<p class="sort--date">{{ $boxbot->id }}</p>
				<p class="sort--height">0</p>
				<p class="sort--width">0</p>
				<p class="sort--rating">0</p>
			</div>
		@endif

{{--
 			<figcaption>
				<span class="stars">★★★☆☆</span>
			</figcaption>
--}}
		</figure><!--
	@endforeach
-->

	</div>
</section>

@php
	$sorted_boxbots = $boxbots->sortBy('id');
@endphp
<section class="prj_info">
@include('_partials.prj_table', ['tableArray' => $sorted_boxbots])
</section>

	<div id="popup">
		<img class="{{ $toggleCurrent }}" src="/x__x/loading-99.gif" alt="" />
		<img class="{{ $toggleOther }}" src="/x__x/loading-99.gif" alt="" />
	</div>
@stop

@section('extra-scripts')
	{{-- <nav id="boxhog"><a href="/o__o/boxbots/">BoxBots</a></nav> --}}
	<script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script>
@stop
