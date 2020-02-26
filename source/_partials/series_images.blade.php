<section class="series_images">
<!-- start no space hack
	@foreach ($img_array as $img)
--><figure>
		<a href="{{ $img->slug }}">
			<img class="lazyload" src="/x__x/loading-99.gif" data-src="x__x/{{ $img->imgfile }}" width="{{ $img->small_width_px }}" height="{{ $img->small_height_px }}" alt="{{ $img->title == '' ? 'Untitled' : $img->title }}" title="{{ $img->title == '' ? 'Untitled' : $img->title }}, {{ $img->nice_date }}, {{ $img->height }} × {{ $img->width }} {{ $img->units }}">
		</a>
		<figcaption>
			{!! $img->title == '' ? 'Untitled' : '<cite>'.$img->title.'</cite>' !!}
		</figcaption>
	</figure><!-- no space hack
	@endforeach
end no space hack -->
</section>
