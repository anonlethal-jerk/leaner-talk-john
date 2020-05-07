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
	</section>

@section('extra-nav')
	<nav id="feralhog" class="hog"><a id="image_viewer_up" href="../"><cite>{{ $page->series_info->title }}</cite></a></nav>
@endsection
@section('extra-scripts')
	<script src="{{ mix('*__*/image_viewer.js', '') }}"></script>
	@if ($page->js != null)
	<script src="{{ mix('*__*/'.$page->series_info->slug.'.js', '') }}" async=""></script>
	@endif
@endsection
@include('_partials.footer')
