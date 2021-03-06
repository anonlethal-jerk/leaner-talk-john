@php
	$page->series_title       = $page->series_boxbot_submissions->title;
	$page->meta_description = 'Bot character made from altered product packaging';
	if ($page->person !== null) {
		$t_person = ', by '.$page->person;
	} else {
		$t_person = '';
	}

	if ($toggleCurrent == 'shadow') {
		$file_ext = '.png';
		$page->series_title       = 'BoxBot Submission Shadows';
	} else {
		$file_ext = '.jpg';
	}
	// YOU DON'T GET TO OVERRIDE THE SOCIAL IMAGE IN MASTER ARRAY BECUSE OF COLOR/SHADOW:
	// Also, I am disregarding social imges for submissions... hmm
	// if ($page->open_graph_image == '') {
		$page->open_graph_image = 'https://jk-keller.com/o__o/boxbots/submissions/x__x/'.$toggleCurrent.'-large/'.$page->imgfile.$file_ext;
	// };
	// if ($page->twitter_image == '') {
		if ($page->twitter_card_type == "summary") {
			$page->twitter_image = 'https://jk-keller.com/o__o/boxbots/submissions/x__x/'.$toggleCurrent.'-large/'.$page->imgfile.$file_ext;
		} else {
			$page->twitter_image = 'https://jk-keller.com/o__o/boxbots/submissions/x__x/'.$toggleCurrent.'-large/'.$page->imgfile.$file_ext;
		};
	// };
		$page->html_title = $page->title.$page->nontitle.$t_person.' •__• '.$page->series_title;
@endphp

@extends('_layouts.master')

@section('body')
<body class="body--boxbot body--submission images--{{ $toggleCurrent }}s">
	<h1 class="visuallyhidden"><cite>{{ $page->title }}</cite>{{ $page->nontitle }}</h1>

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
			<a id="image_viewer_prev" class="nav--prev" href="../{{ $page->getPrevious()->slug }}/">
				<figure>
					<img class="{{ $toggleOther }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleOther }}-small/{{ $page->getPrevious()->imgfile }}.{{ $toggleOther == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
				</figure>
				<figure>
					<img class="{{ $toggleCurrent }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleCurrent }}-small/{{ $page->getPrevious()->imgfile }}.{{ $toggleCurrent == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
					<figcaption>{!! $page->getPrevious()->title != '' ? '<cite>'.$page->getPrevious()->title.'</cite>,' : 'Untitled,' !!} {{ $page->person != NULL ? 'by '.$page->getPrevious()->person : '' }}</figcaption>
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
					<img class="{{ $toggleOther }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleOther }}-small/{{ $page->getNext()->imgfile }}.{{ $toggleOther == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
				</figure>
				<figure>
					<img class="{{ $toggleCurrent }}" src="/o__o/boxbots/submissions/x__x/{{ $toggleCurrent }}-small/{{ $page->getNext()->imgfile }}.{{ $toggleCurrent == 'color' ? 'jpg' : 'png' }}" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
					<figcaption>{!! $page->getNext()->title != '' ? '<cite>'.$page->getNext()->title.'</cite>,' : 'Untitled,' !!} {{ $page->person != NULL ? 'by '.$page->getNext()->person : '' }}</figcaption>
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
	<nav id="feralhog" class="hog"><a id="image_viewer_up" href="../">BoxBot Submissions</a></nav>
@endsection
@section('extra-scripts')
	<script src="{{ mix('*__*/image_viewer.js', '') }}"></script>
	<script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script>
@endsection
