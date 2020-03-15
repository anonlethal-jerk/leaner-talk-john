@extends('_layouts.master')

@section('body')
<body class="body--boxbot images--{{ $toggleCurrent }}s">
	<h1 class="visuallyhidden"><cite>{{ $page->title }}</cite></h1>

	<section class="boxbot_viewer">
		<figure class="viewer--image">
			<img class="{{ $toggleOther }}" src="/o__o/boxbots/x__x/{{ $toggleOther }}-large/{{ $page->imgfile }}.png" alt="{{ $page->title }} BoxBot Silhouette" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
		</figure>
		<figure class="viewer--image">
			<img class="{{ $toggleCurrent }}" src="/o__o/boxbots/x__x/{{ $toggleCurrent }}-large/{{ $page->imgfile }}.png" alt="{{ $page->title }} BoxBot" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
			<figcaption>
				<div class="stars"><!-- get rid of space
					@for ($i = 0; $i < 5; $i++)
						@if ($page->jk_rating > $i)
							@if ($page->jk_rating - $i == .5)
					-->☆<!-- get rid of space
							@else
					-->★<!-- get rid of space
							@endif
						@endif
					@endfor
			--></div>
<cite>{{ $page->title }}</cite>, <span class="no_break">{{ $page->nice_date }}</span>{{ $page->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->height }} {{ $page->width == NULL ? '' : '×' }} {{ $page->width }} {{ $page->units }}</span></figcaption>
		</figure>
		<div class="viewer--prev">
			@if ($page->getPrevious())
			<a class="nav--prev" href="../{{ $page->getPrevious()->slug }}">
				<figure>
					<img class="{{ $toggleOther }}" src="/o__o/boxbots/x__x/{{ $toggleOther }}-small/{{ $page->getPrevious()->imgfile }}.png" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
				</figure>
				<figure>
					<img class="{{ $toggleCurrent }}" src="/o__o/boxbots/x__x/{{ $toggleCurrent }}-small/{{ $page->getPrevious()->imgfile }}.png" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
					<figcaption><cite>{{ $page->getPrevious()->title }}</cite></figcaption>
				</figure>
			</a>
			@else
			<div class="nav--prev">This is the newest BoxBot</div>
			@endif
		</div>
		<div class="viewer--next">
			@if ($page->getNext())
			<a class="nav--next" href="../{{ $page->getNext()->slug }}">
				<figure>
					<img class="{{ $toggleOther }}" src="/o__o/boxbots/x__x/{{ $toggleOther }}-small/{{ $page->getNext()->imgfile }}.png" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
				</figure>
				<figure>
					<img class="{{ $toggleCurrent }}" src="/o__o/boxbots/x__x/{{ $toggleCurrent }}-small/{{ $page->getNext()->imgfile }}.png" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
					<figcaption><cite>{{ $page->getNext()->title }}</cite></figcaption>
				</figure>
			</a>
			@else
			<div class="nav--next">This is the oldest BoxBot</div>
			@endif
		</div>
	</section>
	<nav class="nav--boxbot"><button id="btn--toggle" class="btn--boxbot">{{ $toggleOther }}</button></nav>
@endsection

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="../">BoxBots</a></nav>
@endsection
@section('extra-scripts')
	<script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script>
@endsection
