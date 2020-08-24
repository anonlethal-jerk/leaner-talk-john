@php
	$page->series_title       = $page->series_boxbots->title;
	$page->meta_description = 'Bot character made from altered '.$page->title.' packaging';

	if ($toggleCurrent == 'shadow') {
		$file_ext = '.png';
		$page->series_title       = 'BoxBot Shadows';
	} else {
		$file_ext = '.jpg';
	}
	// YOU DON'T GET TO OVERRIDE THE SOCIAL IMAGE IN MASTER ARRAY BECUSE OF COLOR/SHADOW:
	// if ($page->open_graph_image == '') {
		$page->open_graph_image = 'https://jk-keller.com/o__o/boxbots/x__x/'.$toggleCurrent.'-social/1200x630/'.$page->imgfile.$file_ext;
	// };
	// if ($page->twitter_image == '') {
		if ($page->twitter_card_type == "summary") {
			$page->twitter_image = 'https://jk-keller.com/o__o/boxbots/x__x/'.$toggleCurrent.'-social/512x512/'.$page->imgfile.$file_ext;
		} else {
			$page->twitter_image = 'https://jk-keller.com/o__o/boxbots/x__x/'.$toggleCurrent.'-social/1024x512/'.$page->imgfile.$file_ext;
		};
	// };
@endphp

@extends('_layouts.master', array('t_html_title'=>$page->title.' •__• '.$page->series_title))

@section('body')
<body class="body--boxbot images--{{ $toggleCurrent }}s">
	<h1 class="visuallyhidden"><cite>{{ $page->title }}</cite></h1>

	<section class="boxbot_viewer">
		<figure class="viewer--image">
			<picture>
				<source class="{{ $toggleOther }}" srcset="/o__o/boxbots/x__x/{{ $toggleOther }}-large/{{ $page->imgfile }}.webp" alt="{{ $page->title }} BoxBot Silhouette" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" type="image/webp" />
				<img class="{{ $toggleOther }}" src="/o__o/boxbots/x__x/{{ $toggleOther }}-large/{{ $page->imgfile }}.png" alt="{{ $page->title }} BoxBot Silhouette" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
			</picture>
		</figure>
		<figure class="viewer--image">
			<picture>
				<source class="{{ $toggleCurrent }}" srcset="/o__o/boxbots/x__x/{{ $toggleCurrent }}-large/{{ $page->imgfile }}.webp" alt="{{ $page->title }} BoxBot" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" type="image/webp" />
				<img class="{{ $toggleCurrent }}" src="/o__o/boxbots/x__x/{{ $toggleCurrent }}-large/{{ $page->imgfile }}.png" alt="{{ $page->title }} BoxBot" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
			</picture>
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
			<a id="image_viewer_prev" class="nav--prev" href="../{{ $page->getPrevious()->slug }}/">
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
			<a id="image_viewer_next" class="nav--next" href="../{{ $page->getNext()->slug }}/">
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
	<nav id="feralhog" class="hog"><a id="image_viewer_up" href="../">BoxBots</a></nav>
@endsection
@section('extra-scripts')
	<script src="{{ mix('*__*/image_viewer.js', '') }}"></script>
	<script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script>
@endsection
