@php
	if ( $page->project->nontitle != null ) {
		$titling = $page->project->nontitle;
	} else if ( $page->project->title == '' &&  $page->project->subtitle != null) {
		$titling = 'Untitled ('.$page->project->subtitle.')';
	} else if ( $page->project->title == '' ) {
		$titling = 'Untitled';
	} else {
		$titling = '<cite>'.$page->project->title.'</cite>';
	}

	$page->html_title = str_replace('<cite>','',str_replace('</cite>','',$titling));

	if ($page->project->open_graph_image == '') {
		if ( strpos($page->project->imgfile, '.jpg') !== false || strpos($page->project->imgfile, '.png') !== false ) {
			$page->project->open_graph_image = 'https://jk-keller.com/o__o/'.$page->project->slug.'/x__x/social/1200x630/'.$page->project->imgfile;
		} else {
			$page->project->open_graph_image = 'https://jk-keller.com/o__o/'.$page->project->slug.'/x__x/social/1200x630/'.$page->project->imgfile.'.jpg';
		}
	};
	if ($page->project->twitter_image == '') {
		if ($page->project->twitter_card_type == "summary") {
			if ( strpos($page->project->imgfile, '.jpg') !== false || strpos($page->project->imgfile, '.png') !== false ) {
				$page->project->twitter_image = 'https://jk-keller.com/o__o/'.$page->project->slug.'/x__x/social/512x512/'.$page->project->imgfile;
			} else {
				$page->project->twitter_image = 'https://jk-keller.com/o__o/'.$page->project->slug.'/x__x/social/512x512/'.$page->project->imgfile.'.jpg';
			}
		} else {
			if ( strpos($page->project->imgfile, '.jpg') !== false || strpos($page->project->imgfile, '.png') !== false ) {
				$page->project->twitter_image = 'https://jk-keller.com/o__o/'.$page->project->slug.'/x__x/social/1024x512/'.$page->project->imgfile;
			} else {
				$page->project->twitter_image = 'https://jk-keller.com/o__o/'.$page->project->slug.'/x__x/social/1024x512/'.$page->project->imgfile.'.jpg';
			}
		};
	};
@endphp

@include('_partials.header')

<body class="body--single--{{ $page->project->slug }}">
	<h1 class="visuallyhidden"><cite>{{ $page->project->title }}</cite></h1>

	<section class="image_viewer{{ $page->project->extends_size }}">
@if ($page->project->embed == '' || $page->project->embed == NULL)
		<figure class="viewer--image{{ $page->project->extends_size }}">
	@if ( strpos($page->project->imgfile, '.jpg') !== false || strpos($page->project->imgfile, '.png') !== false )
			<img class="" src="../x__x/large/{{ $page->project->imgfile }}" alt="{{ $page->project->title }}" width="{{ $page->project->large_width_px }}" height="{{ $page->project->large_height_px }}" />
	@else
			<picture>
				<source srcset="../x__x/large/{{ $page->project->imgfile }}.webp" width="{{ $page->project->large_width_px }}" height="{{ $page->project->large_height_px }}" alt="{{ $page->project->title == '' ? 'Untitled' : $page->project->title }}" title="{{ $page->project->title == '' ? 'Untitled' : $page->project->title }}, {{ $page->project->nice_date }}, {{ $page->project->height == '' ? '' : ' '.$page->project->height }}{{ $page->project->width == '' ? '' : ' × ' }}{{ $page->project->width }} {{ $page->project->units }}" type="image/webp">
				<img src="../x__x/large/{{ $page->project->imgfile }}.png" width="{{ $page->project->large_width_px }}" height="{{ $page->project->large_height_px }}" alt="{{ $page->project->title == '' ? 'Untitled' : $page->project->title }}" title="{{ $page->project->title == '' ? 'Untitled' : $page->project->title }}, {{ $page->project->nice_date }}, {{ $page->project->height == '' ? '' : ' '.$page->project->height }}{{ $page->project->width == '' ? '' : ' × ' }}{{ $page->project->width }} {{ $page->project->units }}">
			</picture>
	@endif
			<figcaption>
				{!! $titling !!}, <span class="no_break">{{ $page->project->nice_date }}</span>{{ $page->project->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->project->height }} {{ $page->project->width == NULL ? '' : '×' }} {{ $page->project->width }} {{ $page->project->depth == NULL ? '' : '×' }} {{ $page->project->depth }} {{ $page->project->units }}</span>
			</figcaption>
		</figure>
@else
		<figure class="viewer--image{{ $page->project->extends_size }} viewer--image-embed">
			{!! $page->project->embed !!}
			<figcaption>
				{!! $titling !!}, <span class="no_break">{{ $page->project->nice_date }}</span>, {{ $page->project->medium }}{{ $page->project->duration == NULL ? '' : ', ' }}{{ $page->project->duration }}{{ $page->project->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->project->height }} {{ $page->project->width == NULL ? '' : '×' }} {{ $page->project->width }} {{ $page->project->depth == NULL ? '' : '×' }} {{ $page->project->depth }} {{ $page->project->units }}</span>
			</figcaption>
		</figure>
@endif
	</section>

@section('extra-nav')
	<nav id="feralhog" class="hog"><a id="image_viewer_up" href="../">Projects</a></nav>
@endsection
@section('extra-scripts')
	<script src="{{ mix('*__*/image_viewer.js', '') }}"></script>
	@if ($page->project->js != null)
	<script src="{{ mix('*__*/'.$page->project->slug.'.js', '') }}" async=""></script>
	@endif
@endsection
@include('_partials.footer')
