@php
if ($page->open_graph_image == '') {
	if ( strpos($page->imgfile, '.jpg') !== false || strpos($page->imgfile, '.png') !== false ) {
		$page->open_graph_image = 'https://jk-keller.com/o__o/'.$page->series_info->slug.'/x__x/social/1200x630/'.$page->imgfile;
	} else {
		$page->open_graph_image = 'https://jk-keller.com/o__o/'.$page->series_info->slug.'/x__x/social/1200x630/'.$page->imgfile.'.jpg';
	}
};
if ($page->twitter_image == '') {
	if ($page->twitter_card_type == "summary") {
		if ( strpos($page->imgfile, '.jpg') !== false || strpos($page->imgfile, '.png') !== false ) {
			$page->twitter_image = 'https://jk-keller.com/o__o/'.$page->series_info->slug.'/x__x/social/512x512/'.$page->imgfile;
		} else {
			$page->twitter_image = 'https://jk-keller.com/o__o/'.$page->series_info->slug.'/x__x/social/512x512/'.$page->imgfile.'.jpg';
		}
	} else {
		if ( strpos($page->imgfile, '.jpg') !== false || strpos($page->imgfile, '.png') !== false ) {
			$page->twitter_image = 'https://jk-keller.com/o__o/'.$page->series_info->slug.'/x__x/social/1024x512/'.$page->imgfile;
		} else {
			$page->twitter_image = 'https://jk-keller.com/o__o/'.$page->series_info->slug.'/x__x/social/1024x512/'.$page->imgfile.'.jpg';
		}
	};
};
@endphp

@include('_partials.header')

<body class="body--single--{{ $page->series_info->slug }}">
	<h1 class="visuallyhidden"><cite>{{ $page->title }}</cite></h1>

	<section class="image_viewer{{ $page->extends_size }}">
@php
if ( $page->nontitle != null ) {
	$titling = $page->nontitle;
} else if ( $page->title == '' &&  $page->subtitle != null) {
	$titling = 'Untitled ('.$page->subtitle.')';
} else if ( $page->title == '' ) {
	$titling = 'Untitled';
} else {
	$titling = '<cite>'.$page->title.'</cite>';
}
@endphp
@if ($page->embed == '' || $page->embed == NULL)
		<figure class="viewer--image{{ $page->extends_size }}">
	@if ( strpos($page->imgfile, '.jpg') !== false || strpos($page->imgfile, '.png') !== false )
			<img class="" src="../x__x/large/{{ $page->imgfile }}" alt="{{ $page->title }}" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
	@else
			<picture>
				<source srcset="../x__x/large/{{ $page->imgfile }}.webp" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" alt="{{ $page->title == '' ? 'Untitled' : $page->title }}" title="{{ $page->title == '' ? 'Untitled' : $page->title }}, {{ $page->nice_date }}, {{ $page->height == '' ? '' : ' '.$page->height }}{{ $page->width == '' ? '' : ' × ' }}{{ $page->width }} {{ $page->units }}" type="image/webp">
				<img src="../x__x/large/{{ $page->imgfile }}.png" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" alt="{{ $page->title == '' ? 'Untitled' : $page->title }}" title="{{ $page->title == '' ? 'Untitled' : $page->title }}, {{ $page->nice_date }}, {{ $page->height == '' ? '' : ' '.$page->height }}{{ $page->width == '' ? '' : ' × ' }}{{ $page->width }} {{ $page->units }}">
			</picture>
	@endif
			<figcaption>
				{!! $titling !!}, <span class="no_break">{{ $page->nice_date }}</span>{{ $page->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->height }} {{ $page->width == NULL ? '' : '×' }} {{ $page->width }} {{ $page->depth == NULL ? '' : '×' }} {{ $page->depth }} {{ $page->units }}</span>
			</figcaption>
		</figure>
@else
		<figure class="viewer--image{{ $page->extends_size }} viewer--image-embed">
			{!! $page->embed !!}
			<figcaption>
				{!! $titling !!}, <span class="no_break">{{ $page->nice_date }}</span>{{ $page->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->height }} {{ $page->width == NULL ? '' : '×' }} {{ $page->width }} {{ $page->depth == NULL ? '' : '×' }} {{ $page->depth }} {{ $page->units }}</span>
			</figcaption>
		</figure>
@endif
		<div class="viewer--prev">
			@if ($page->getPrevious())
@php
if ( $page->getPrevious()->nontitle != null ) {
	$prev_titling = $page->getPrevious()->nontitle;
} else if ( $page->getPrevious()->title == '' &&  $page->getPrevious()->subtitle != null) {
	$prev_titling = 'Untitled ('.$page->getPrevious()->subtitle.')';
} else if ( $page->getPrevious()->title == '' ) {
	$prev_titling = 'Untitled';
} else {
	$prev_titling = '<cite>'.$page->getPrevious()->title.'</cite>';
}
@endphp
			<a class="nav--prev" href="../{{ $page->getPrevious()->slug }}/">
				<figure>
	@if ( strpos($page->getPrevious()->imgfile, '.jpg') !== false || strpos($page->getPrevious()->imgfile, '.png') !== false )
					<img class="" src="../x__x/small/{{ $page->getPrevious()->imgfile }}" alt="{{ $page->getPrevious()->title == '' ? 'Untitled' : $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
	@else
			<picture>
				<source srcset="../x__x/small/{{ $page->getPrevious()->imgfile }}.webp" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" alt="{{ $page->getPrevious()->title == '' ? 'Untitled' : $page->getPrevious()->title }}" type="image/webp">
				<img src="../x__x/small/{{ $page->getPrevious()->imgfile }}.png" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" alt="{{ $page->getPrevious()->title == '' ? 'Untitled' : $page->getPrevious()->title }}">
			</picture>
	@endif
					<figcaption>{!! $prev_titling !!}</figcaption>
				</figure>
			</a>
			@else
			<div class="nav--prev">The End</div>
			@endif
		</div>
		<div class="viewer--next">
			@if ($page->getNext())
@php
if ( $page->getNext()->nontitle != null ) {
	$next_titling = $page->getNext()->nontitle;
} else if ( $page->getNext()->title == '' &&  $page->getNext()->subtitle != null) {
	$next_titling = 'Untitled ('.$page->getNext()->subtitle.')';
} else if ( $page->getNext()->title == '' ) {
	$next_titling = 'Untitled';
} else {
	$next_titling = '<cite>'.$page->getNext()->title.'</cite>';
}
@endphp
			<a class="nav--next" href="../{{ $page->getNext()->slug }}/">
				<figure>
	@if ( strpos($page->getNext()->imgfile, '.jpg') !== false || strpos($page->getNext()->imgfile, '.png') !== false )
					<img class="" src="../x__x/small/{{ $page->getNext()->imgfile }}" alt="{{ $page->getNext()->title == '' ? 'Untitled' : $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
	@else
			<picture>
				<source srcset="../x__x/small/{{ $page->getNext()->imgfile }}.webp" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" alt="{{ $page->getNext()->title == '' ? 'Untitled' : $page->getNext()->title }}" type="image/webp">
				<img src="../x__x/small/{{ $page->getNext()->imgfile }}.png" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" alt="{{ $page->getNext()->title == '' ? 'Untitled' : $page->getNext()->title }}">
			</picture>
	@endif
					<figcaption>{!! $next_titling !!}</figcaption>
				</figure>
			</a>
			@else
			<div class="nav--next">The End</div>
			@endif
		</div>
	</section>

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="../"><cite>{{ $page->series_info->title }}</cite></a></nav>
@endsection
@section('extra-scripts')
	<script src="{{ mix('*__*/image_viewer.js', '') }}"></script>
	@if ($page->js != null)
	<script src="{{ mix('*__*/'.$page->series_info->slug.'.js', '') }}" async=""></script>
	@endif
@endsection
@include('_partials.footer')
