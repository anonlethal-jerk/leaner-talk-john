<section class="image_viewer">
	<figure class="viewer--image">
		<img class="" src="../x__x/{{ $page->imgfile }}" alt="{{ $page->title }}" width="{{ $page->large_width_px }}" height="{{ $page->large_height_px }}" />
		<figcaption>
			{!! $page->title == '' ? 'Untitled' : '<cite>'.$page->title.'</cite>' !!}, <span class="no_break">{{ $page->nice_date }}</span>{{ $page->width == NULL ? '' : ',' }} <span class="no_break">{{ $page->height }} {{ $page->width == NULL ? '' : '×' }} {{ $page->width }} {{ $page->depth == NULL ? '' : '×' }} {{ $page->depth }} {{ $page->units }}</span>
		</figcaption>
	</figure>
	<div class="viewer--prev">
		@if ($page->getPrevious())
		<a class="nav--prev" href="../{{ $page->getPrevious()->slug }}/">
			<figure>
				<img class="" src="../x__x/{{ $page->getPrevious()->imgfile }}" alt="{{ $page->getPrevious()->title }}" width="{{ $page->getPrevious()->small_width_px }}" height="{{ $page->getPrevious()->small_height_px }}" />
				<figcaption>{!! $page->getPrevious()->title == '' ? 'Untitled' : '<cite>'.$page->getPrevious()->title.'</cite>' !!}</figcaption>
			</figure>
		</a>
		@else
		<div class="nav--prev">The New End</div>
		@endif
	</div>
	<div class="viewer--next">
		@if ($page->getNext())
		<a class="nav--next" href="../{{ $page->getNext()->slug }}/">
			<figure>
				<img class="" src="../x__x/{{ $page->getNext()->imgfile }}" alt="{{ $page->getNext()->title }}" width="{{ $page->getNext()->small_width_px }}" height="{{ $page->getNext()->small_height_px }}" />
				<figcaption>{!! $page->getNext()->title == '' ? 'Untitled' : '<cite>'.$page->getNext()->title.'</cite>' !!}</figcaption>
			</figure>
		</a>
		@else
		<div class="nav--next">The Old End</div>
		@endif
	</div>
</section>
