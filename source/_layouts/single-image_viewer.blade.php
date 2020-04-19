@php
if ($page->open_graph_image == '') {
	$page->open_graph_image = 'https://jk-keller.com/o__o/'.$page->series_info->slug.'/x__x/social/1200x630/'.$page->imgfile;
};
if ($page->twitter_image == '') {
	if ($page->twitter_card_type == "summary") {
		$page->twitter_image = 'https://jk-keller.com/o__o/'.$page->series_info->slug.'/x__x/social/512x512/'.$page->imgfile;
	} else {
		$page->twitter_image = 'https://jk-keller.com/o__o/'.$page->series_info->slug.'/x__x/social/1024x512/'.$page->imgfile;
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
			<img class="" src="../x__x/large/{{ $page->imgfile }}" alt="{{ $page->title }}" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
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
					<img class="" src="../x__x/small/{{ $page->getPrevious()->imgfile }}" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
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
					<img class="" src="../x__x/small/{{ $page->getNext()->imgfile }}" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
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
