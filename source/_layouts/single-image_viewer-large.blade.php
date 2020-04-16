@include('_partials.header')

<body class="body--single--{{ $page->series_slug }}">
	<h1 class="visuallyhidden"><cite>{{ $page->title }}</cite></h1>

	<section class="image_viewer-large">
	@if ($page->embed == '' || $page->embed == NULL)
		<figure class="viewer--image-large">
			<img class="" src="../x__x/large/{{ $page->imgfile }}" alt="{{ $page->title }}" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
			<figcaption>
				{!! $page->title == '' ? 'Untitled' : '<cite>'.$page->title.'</cite>' !!}, <span class="no_break">{{ $page->nice_date }}</span>{{ $page->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->height }} {{ $page->width == NULL ? '' : '×' }} {{ $page->width }} {{ $page->depth == NULL ? '' : '×' }} {{ $page->depth }} {{ $page->units }}</span>
			</figcaption>
		</figure>
	@else
		<figure class="viewer--image-large viewer--image-embed">
			{!! $page->embed !!}
			<figcaption>
				{!! $page->title == '' ? 'Untitled' : '<cite>'.$page->title.'</cite>' !!}, <span class="no_break">{{ $page->nice_date }}</span>{{ $page->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->height }} {{ $page->width == NULL ? '' : '×' }} {{ $page->width }} {{ $page->depth == NULL ? '' : '×' }} {{ $page->depth }} {{ $page->units }}</span>
			</figcaption>
		</figure>
	@endif
		<div class="viewer--prev">
			@if ($page->getPrevious())
			<a class="nav--prev" href="../{{ $page->getPrevious()->slug }}/">
				<figure>
					<img class="" src="../x__x/small/{{ $page->getPrevious()->imgfile }}" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
					<figcaption>{!! $page->getPrevious()->title == '' ? 'Untitled' : '<cite>'.$page->getPrevious()->title.'</cite>' !!}</figcaption>
				</figure>
			</a>
			@else
			<div class="nav--prev">The End</div>
			@endif
		</div>
		<div class="viewer--next">
			@if ($page->getNext())
			<a class="nav--next" href="../{{ $page->getNext()->slug }}/">
				<figure>
					<img class="" src="../x__x/small/{{ $page->getNext()->imgfile }}" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
					<figcaption>{!! $page->getNext()->title == '' ? 'Untitled' : '<cite>'.$page->getNext()->title.'</cite>' !!}</figcaption>
				</figure>
			</a>
			@else
			<div class="nav--next">The End</div>
			@endif
		</div>
	</section>

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="../"><cite>{{ $page->series_title }}</cite></a></nav>
@endsection
@section('extra-scripts')
	<script src="{{ mix('*__*/image_viewer.js', '') }}"></script>
	@if ($page->js != null)
	<script src="{{ mix('*__*/'.$page->series_slug.'.js', '') }}" async=""></script>
	@endif
@endsection
@include('_partials.footer')
