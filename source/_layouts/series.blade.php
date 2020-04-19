@php
	$t_slug = $page->series_info->slug;
@endphp

@include('_partials.header')

<body class="body--series body--{{ $page->series_info->slug }}">
{{-- <pre>{{ var_dump($page->daily_photos) }}</pre> --}}
	<section class="series_info">
		@include('_partials.series_table', ['seriesArray' => $page->series_info, 'seriesHead' => true ])
	</section>

	<section class="series_images">
	<!-- start no space hack
		@foreach ($$t_slug->where('imgfile', '!=', '') as $img)
@if ( $img->offset_top_px < 0 )
	--><figure style="width:{{ $img->small_width_px }}px;margin-top:{{ $img->offset_top_px }}px;">
@else
	--><figure style="width:{{ $img->small_width_px }}px;">
@endif


			<a href="{{ $img->slug }}/">
				<img class="lazyload" src="/x__x/loading-99.gif" data-src="x__x/small/{{ $img->imgfile }}" width="{{ $img->small_width_px }}" height="{{ $img->small_height_px }}" alt="{{ $img->title == '' ? 'Untitled' : $img->title }}" title="{{ $img->title == '' ? 'Untitled' : $img->title }}, {{ $img->nice_date }},{{ $img->height == '' ? '' : ' '.$img->height }}{{ $img->width == '' ? '' : ' × ' }}{{ $img->width }} {{ $img->units }}">
@php
	if ( $img->nontitle != null ) {
		$titling = $img->nontitle;
	} else if ( $img->title == '' &&  $img->subtitle != null) {
		$titling = 'Untitled ('.$img->subtitle.')';
	} else if ( $img->title == '' ) {
		$titling = 'Untitled';
	} else {
		$titling = '<cite>'.$img->title.'</cite>';
	}
@endphp
				<figcaption>{!! $titling !!}</figcaption>
			</a>
		</figure><!-- no space hack
		@endforeach
	end no space hack -->
	</section>


	<section class="prj_info">
		@include('_partials.prj_table', ['tableArray' => $$t_slug->sortBy('id')])
	</section>

	<div id="popup">
		<img class="img--under" src="/x__x/loading-99.gif" alt="" />
		{{-- <img class="img--over" src="/x__x/loading-99.gif" alt="" /> --}}
	</div>


@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="/o__o/">Projects</a></nav>
@endsection
@section('extra-scripts')
	<!-- https://github.com/aFarkas/lazysizes -->
	<script src="{{ mix('*__*/lazysizes.min.js', '') }}"></script>
	<script src="{{ mix('*__*/tables.js', '') }}"></script>
	@if ($t_js != null)
	<script src="{{ mix('*__*/'.$t_slug.'.js', '') }}" async=""></script>
	@endif
@endsection
@include('_partials.footer')
