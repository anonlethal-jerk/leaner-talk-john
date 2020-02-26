@include('_partials.header')

<body class="body--series body--{{ $t_slug }}">
	<section class="series_info">
		@include('_partials.series_table', ['seriesArray' => $t_series_array ])
	</section>

	<section class="series_images">
	<!-- start no space hack
		@foreach ($$t_slug->where('imgfile', '!=', '') as $img)
	--><figure>
			<a href="{{ $img->slug }}">
				<img class="lazyload" src="/x__x/loading-99.gif" data-src="x__x/small/{{ $img->imgfile }}" width="{{ $img->small_width_px }}" height="{{ $img->small_height_px }}" alt="{{ $img->title == '' ? 'Untitled' : $img->title }}" title="{{ $img->title == '' ? 'Untitled' : $img->title }}, {{ $img->nice_date }}, {{ $img->height }} × {{ $img->width }} {{ $img->units }}">
				<figcaption>
					{!! $img->title == '' ? 'Untitled' : '<cite>'.$img->title.'</cite>' !!}
				</figcaption>
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
		<img class="img--over" src="/x__x/loading-99.gif" alt="" />
	</div>


@section('extra-scripts')
	<nav id="feralhog"><a href="/o__o/">Projects</a></nav>
	@if ($t_js != null)
	<script src="{{ mix('*__*/'.$t_slug.'.js', '') }}" async=""></script>
	@endif
@endsection
@include('_partials.footer')
