@extends('_layouts.master')

@section('body')
<body class="body--daily_photo_single">
	<h1 class="visuallyhidden"><cite>{{ $page->title }}</cite></h1>

	<section class="boxbot_viewer">
		<figure class="viewer--image">
			<img class="" src="../x__x/{{ $page->imgfile }}" alt="{{ $page->title }}" width="{{ $page->largehalfwidthpx }}" height="{{ $page->largehalfheightpx }}" />
			<figcaption>
<cite>{{ $page->title }}</cite>, <span class="no_break">{{ $page->nice_date }}</span>{{ $page->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->height }} {{ $page->width == NULL ? '' : '×' }} {{ $page->width }} {{ $page->units }}</span></figcaption>
		</figure>
		<div class="viewer--prev">
			@if ($page->getPrevious())
			<a class="nav--prev" href="../{{ $page->getPrevious()->slug }}">
				<figure>
					<img class="" src="../x__x/{{ $page->getPrevious()->imgfile }}" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->percenthalfwidthpx }}" height="{{ $page->getPrevious()->percenthalfheightpx }}" />
					<figcaption><cite>{{ $page->getPrevious()->title }}</cite></figcaption>
				</figure>
			</a>
			@else
			<div class="nav--prev">This is the newest</div>
			@endif
		</div>
		<div class="viewer--next">
			@if ($page->getNext())
			<a class="nav--next" href="../{{ $page->getNext()->slug }}">
				<figure>
					<img class="" src="../x__x/{{ $page->getNext()->imgfile }}" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->percenthalfwidthpx }}" height="{{ $page->getNext()->percenthalfheightpx }}" />
					<figcaption><cite>{{ $page->getNext()->title }}</cite></figcaption>
				</figure>
			</a>
			@else
			<div class="nav--next">This is the oldest</div>
			@endif
		</div>
	</section>
@endsection

@section('extra-scripts')
	<nav id="feralhog"><a href="../">The Adaption to My Generation</a></nav>
	{{-- <nav id="boxhog"><a href="../">BoxBots</a></nav> --}}
	{{-- <script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script> --}}
@endsection
