@extends('_layouts.master')

@section('body')
<body class="body--boxbot body--submission images--{{ $toggleCurrent }}s">
	<h1 class="visuallyhidden"><cite>{{ $page->title }}</cite></h1>

	<section class="boxbot_viewer">
		<figure class="viewer--image">
			<img class="{{ $toggleOther }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleOther }}-large/{{ $page->imgfile }}.{{ $toggleOther == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->title }} BoxBot Silhouette" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
		</figure>
		<figure class="viewer--image">
			<img class="{{ $toggleCurrent }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleCurrent }}-large/{{ $page->imgfile }}.{{ $toggleCurrent == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->title }} BoxBot" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
			<figcaption>
				{!! $page->title != '' ? '<cite>'.$page->title.'</cite>,' : 'Untitled,' !!} {{ $page->person != NULL ? 'by '.$page->person.',' : '' }} <span class="no_break">{{ $page->nice_date }}</span>{{ $page->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->height }} {{ $page->width == NULL ? '' : '×' }} {{ $page->width }} {{ $page->units }}</span>
			</figcaption>
		</figure>
		<div class="viewer--prev">
			@if ($page->getPrevious())
			<a class="nav--prev" href="../{{ $page->getPrevious()->slug }}">
				<figure>
					<img class="{{ $toggleOther }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleOther }}-small/{{ $page->getPrevious()->imgfile }}.{{ $toggleOther == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
				</figure>
				<figure>
					<img class="{{ $toggleCurrent }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleCurrent }}-small/{{ $page->getPrevious()->imgfile }}.{{ $toggleCurrent == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
					<figcaption>by {{ $page->getPrevious()->person }}</figcaption>
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
					<img class="{{ $toggleOther }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleOther }}-small/{{ $page->getNext()->imgfile }}.{{ $toggleOther == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
				</figure>
				<figure>
					<img class="{{ $toggleCurrent }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleCurrent }}-small/{{ $page->getNext()->imgfile }}.{{ $toggleCurrent == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
					<figcaption>by {{ $page->getNext()->person }}</figcaption>
				</figure>
			</a>
			@else
			<div class="nav--next">This is the oldest BoxBot</div>
			@endif
		</div>
	</section>
	<nav class="nav--boxbot"><button id="btn--toggle" class="btn--boxbot">{{ $toggleOther }}</button></nav>
@endsection

@section('extra-scripts')
	{{-- <nav id="feralhog"><a href="/o__o/">Projects</a></nav> --}}
	<nav id="feralhog" class="hog"><a href="../">BoxBot Submissions</a></nav>
	<script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script>
@endsection
