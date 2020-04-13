@php
	$t_series_array = $page->series_boxbots;
	$t_slug         = $page->series_boxbots->slug;
	$t_series       = $page->series_boxbots->title;
	$t_js           = $page->series_boxbots->js;
@endphp

@extends('_layouts.master')

@section('body')
<body class="body--series body--boxbots images--{{ $toggleCurrent }}s">
	<section class="series_info">
		@include('_partials.series_table', ['seriesArray' => $t_series_array, 'seriesHead' => true ])
	</section>

	<section class="images images--boxbots images--{{ $toggleCurrent }}">
		<nav class="nav--boxbots">
			<button id="btn--toggle">{{ $toggleOther }}</button>
			<span id="label--sortby">sort by:</span>
			<div class="btn-group--sortby">
				<button id="btn--date" class="sort--desc">date</button>
				{{-- <button id="btn--title">title</button> --}}
				<button id="btn--height">height</button>
				<button id="btn--width">width</button>
				<button id="btn--rating">rating</button>
			</div>
		</nav>

		<div id="sort--bots">

			@php
				$filtered_boxbots = $boxbots->where('height', '!=', '');
			@endphp
<!-- get rid of spacing
			@foreach ($filtered_boxbots as $boxbot)
			--><figure>
				@if ( $boxbot->offset_bottom_px < 0 )
					<a style="bottom:{{ $boxbot->offset_bottom_px }}px" href="{{ $boxbot->slug }}/">
				@else
					<a href="{{ $boxbot->slug }}/">
				@endif
					<picture>
						<source class="{{ $toggleOther }}" data-srcset="/o__o/boxbots/x__x/{{ $toggleOther }}-small/{{ $boxbot->imgfile }}.webp" width="{{ $boxbot->small_width_px }}" height="{{ $boxbot->small_height_px }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm" type="image/webp">
						<img class="{{ $toggleOther }} lazyload" src="/x__x/loading-rgb.gif" data-src="/o__o/boxbots/x__x/{{ $toggleOther }}-small/{{ $boxbot->imgfile }}.png" width="{{ $boxbot->small_width_px }}" height="{{ $boxbot->small_height_px }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm">
					</picture>
					<picture>
						<source class="{{ $toggleCurrent }}" data-srcset="/o__o/boxbots/x__x/{{ $toggleCurrent }}-small/{{ $boxbot->imgfile }}.webp" width="{{ $boxbot->small_width_px }}" height="{{ $boxbot->small_height_px }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm" type="image/webp">
						<img class="{{ $toggleCurrent }} lazyload" src="/x__x/loading-rgb.gif" data-src="/o__o/boxbots/x__x/{{ $toggleCurrent }}-small/{{ $boxbot->imgfile }}.png" width="{{ $boxbot->small_width_px }}" height="{{ $boxbot->small_height_px }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm">
					</picture>
				</a>
				<div class="sort--hide">
					<p class="sort--title">{{ $boxbot->title }}</p>
					<p class="sort--date">{{ $boxbot->id }}</p>
					<p class="sort--height">{{ $boxbot->height }}</p>
					<p class="sort--width">{{ $boxbot->width }}</p>
					<p class="sort--rating">{{ $boxbot->jk_rating }}</p>
				</div>
	 			<figcaption>
					<span class="stars">
						@for ($i = 0; $i < 5; $i++)
							@if ($boxbot->jk_rating > $i)
								@if ($boxbot->jk_rating - $i == .5)
									☆
								@else
									★
								@endif
							@endif
						@endfor
					</span>
				</figcaption>

			</figure><!-- get rid of spacing
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
		<img class="img--under" src="/x__x/loading-rgb.gif" alt="" />
		<img class="img--over" src="/x__x/loading-rgb.gif" alt="" />
	</div>
@stop

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="/o__o/">Projects</a></nav>
@endsection
@section('extra-scripts')
	<script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script>
@stop
