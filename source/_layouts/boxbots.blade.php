@php
$series_info = [
	'title'       => 'BoxBots',
	'nice_date'   => '1999–',
	'status'      => 'Ongoing & <a href="/o__o/boxbots/submissions/">Accepting</a>',
	'description' => '<p>Robots made by altering consumer packaging.</p>
		<p>Originally stole the idea from <a href=\"http://hello.eboy.com/eboy/\">eboy</a>, but after <strong>'.$boxbots->count().'</strong> of these, I guess you could say it’s taken on a life of its own.</p>',
	'notes'       => '<p><a href="https://instagram.com/justboxbots">Follow on the grams</a></p><p><a href="/o__o/boxbots/submissions/">Submissions</a></p>',
	'to_dos'      => '<ul>
		<li><del><strong>rollover table to show image of bot. move from left to right 0 < 1 opacity of shadow.</strong></del></li>
		<li>where are they?</li>
		<li>titles for apostrophes and better descriptions</li>
		<li>color correction for scans</li>
		<li>dimensions for siblings/twins; c;</li>
		<li>rename images with jk_id-boxbot-name-date?</li>
		<li>add ‘show info’ view with cards same size to show stats</li>
		</ul>
		I searched for ‘boxbot’ in finder and went through all the files...?',
	'hidden'      => '
		embarrassed, but I continue to enjoy making these<br>
		why do I keep making these?<br>
		Relatively sized for comparison and in reverse chronological order<br>
		<p>I was originally inspired by <a href=\"http://www.eboy.com\">eboy</a>’s packaging creations. A couple were made just to see what I could come up with on my own. I tried (and still do) to focus on using only lines and shapes that are in the original packaging to guide what the BoxBot will look like. While in Antarctica, I became obsessed with this project from the perspective of waste re-use. That’s where a bulk of them were created. Now I j/ust do them every so often to have a little fun.</p>
		<p>(submitted) I have no idea what size most of these are</p>
		<p>I invite you to take part in this lovely craft by <em>sending your image tome</p>
		<p>I’d love to see what other folks can create, so I invite you to take part in this lovely craft by sending your image to mailto:website@c71123.com, I’ll try to add it as quickly as I can.</p>
		<p>I got the idea for the BoxBots from the design collective eBoy back in 1998. I make my versions of them in the DIY spirit. Can’t afford to buy the originals, why not make them yourself and add your own personality? While eBoy doesn’t focus on the inherent shapes and forms within the pre-existing designs on the boxes, I try to only use lines and shapes that are in the design of the packag- ing. After 8 years I have a collection of almost 100 different BoxBots. They are a part of the ritual of making when I don’t feel like creating something totally new on my own. They get the hands moving.</p>
		repurposed product packaging - cut packaging - reused packaging - made from discarded XXXX packaging<br>
		<h3>Which is your favorite box bot?</h3>
		<p>Like most things subjective, it’s hard to choose a single one. Overall, I like the way the beer and cigarette packages turn out. Odd, since I’ve never smoked and drink rarely. If I had to choose one to be my friend, it’d have to be the Dos Equis bug, while my mortal enemy would be the ogre Mr. Guinness. I think I can safely say that my least favorite is Boston Lager. A black mark on the otherwise shining beer genre.</p>',
];
@endphp

@extends('_layouts.master')

@section('body')
<body class="body--boxbots images--{{ $toggleCurrent }}s">
	{{-- page: {{ $page->testvar }} --}}
	{{-- boxbots: {{ $boxbots->first()->testvar }} --}}
	<section class="series_info">
		@include('_partials.series_table', ['seriesArray' => $series_info ])
	</section>

	<section class="images images--boxbots images--{{ $toggleCurrent }}">
		<nav class="nav--boxbots">
			<button id="btn--toggle">{{ $toggleOther }}</button>
			<span id="label--sortby">sort by:</span>
			<div class="btn-group--sortby">
				<button id="btn--date" class="sort--desc">date</button>
				{{-- <button id="btn--title">title</button> --}}
				<button id="btn--height">height</button>
				<button id="btn--width">width</button>
				<button id="btn--rating">rating</button>
			</div>
		</nav>

		<div id="sort--bots">

			@php
				$filtered_boxbots = $boxbots->where('height', '!=', '');
			@endphp
<!-- get rid of spacing
			@foreach ($filtered_boxbots as $boxbot)
			--><figure>
				@if ( $boxbot->offsetbottompx < 0 )
					<a style="bottom:{{ $boxbot->offsetbottompx }}" href="{{ $boxbot->slug }}">
				@else
					<a href="{{ $boxbot->slug }}">
				@endif
					<img class="{{ $toggleOther }} lazyload" src="/x__x/loading-99.gif" data-src="/o__o/boxbots/x__x/{{ $toggleOther }}-small/{{ $boxbot->imgfile }}.png" width="{{ $boxbot->percenthalfwidthpx }}" height="{{ $boxbot->percenthalfheightpx }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm">
					<img class="{{ $toggleCurrent }} lazyload" src="/x__x/loading-99.gif" data-src="/o__o/boxbots/x__x/{{ $toggleCurrent }}-small/{{ $boxbot->imgfile }}.png" width="{{ $boxbot->percenthalfwidthpx }}" height="{{ $boxbot->percenthalfheightpx }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm">
				</a>
				<div class="sort--hide">
					<p class="sort--title">{{ $boxbot->title }}</p>
					<p class="sort--date">{{ $boxbot->id }}</p>
					<p class="sort--height">{{ $boxbot->height }}</p>
					<p class="sort--width">{{ $boxbot->width }}</p>
					<p class="sort--rating">{{ $boxbot->jk_rating }}</p>
				</div>
	 			<figcaption>
					<span class="stars">
						@for ($i = 0; $i < 5; $i++)
							@if ($boxbot->jk_rating > $i)
								@if ($boxbot->jk_rating - $i == .5)
									☆
								@else
									★
								@endif
							@endif
						@endfor
					</span>
				</figcaption>

			</figure><!-- get rid of spacing
			@endforeach
	-->

		</div>
	</section>

	@php
		$sorted_boxbots = $boxbots->sortBy('id');
	@endphp
	<section class="prj_info">
		@include('_partials.prj_table', ['tableArray' => $sorted_boxbots])
	</section>

	<div id="popup">
		<img class="img--under" src="/x__x/loading-99.gif" alt="" />
		<img class="img--over" src="/x__x/loading-99.gif" alt="" />
	</div>
@stop

@section('extra-scripts')
	<nav id="feralhog"><a href="/o__o/">Projects</a></nav>
	<script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script>
@stop
