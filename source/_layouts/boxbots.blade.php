@extends('_layouts.master')

@section('body')
<body class="body--boxbots images--{{ $toggleCurrent }}s">
	<h1>{{ $boxbots->count() }} Boxbots</h1>

<section class="images images--boxbots images--{{ $toggleCurrent }}">
	<nav class="nav--boxbots">
		<button id="btn--toggle">{{ $toggleOther }}</button>
		<span>sort by:</span>
		<button id="btn--date" class="sort--desc">date</button>
		<button id="btn--title">title</button>
		<button id="btn--height">height</button>
		<button id="btn--width">width</button>
		{{-- <button id="btn--stars">stars</button> --}}
	</nav>

	<div id="sort--bots">

@php $filtered_boxbots = $boxbots->where('height', '!=', 0); @endphp
<!--
	@foreach ($filtered_boxbots as $boxbot)
		--><figure>
		@if ( $boxbot->offsetbottompx < 0 )
			<a style="bottom:{{ $boxbot->offsetbottompx }}" href="{{ $boxbot->slug }}">
		@else
			<a href="{{ $boxbot->slug }}">
		@endif
		@if ( $boxbot->height > 0 )
				<img class="{{ $toggleOther }} lazyload" src="/x__x/loading-99.gif" data-src="/o__o/boxbots/x__x/{{ $toggleOther }}-small/{{ $boxbot->imgfile }}.png" width="{{ $boxbot->percenthalfwidthpx }}" height="{{ $boxbot->percenthalfheightpx }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm">
				<img class="{{ $toggleCurrent }} lazyload" src="/x__x/loading-99.gif" data-src="/o__o/boxbots/x__x/{{ $toggleCurrent }}-small/{{ $boxbot->imgfile }}.png" width="{{ $boxbot->percenthalfwidthpx }}" height="{{ $boxbot->percenthalfheightpx }}" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, {{ $boxbot->height }} × {{ $boxbot->width }} mm">
			</a>
			<div class="sort--hide">
				<p class="sort--title">{{ $boxbot->title }}</p>
				<p class="sort--date">{{ $boxbot->id }}</p>
				<p class="sort--height">{{ $boxbot->height }}</p>
				<p class="sort--width">{{ $boxbot->width }}</p>
				<p class="sort--rating">{{ $boxbot->rating }}</p>
			</div>
		@else
				<img class="empty" src="/x__x/loading-99.gif" width="49" height="49" alt="{{ $boxbot->title }} BoxBot" title="{{ $boxbot->title }}, {{ $boxbot->nice_date }}, TK × TK mm">
			</a>
			<div class="sort--hide" style="color:#f00;">
				<p class="sort--title">{{ $boxbot->title }}</p>
				<p class="sort--date">{{ $boxbot->id }}</p>
				<p class="sort--height">0</p>
				<p class="sort--width">0</p>
				<p class="sort--rating">0</p>
			</div>
		@endif

{{--
 			<figcaption>
				<span class="stars">★★★☆☆</span>
			</figcaption>
--}}
		</figure><!--
	@endforeach
-->

	</div>
</section>

@php $sorted_boxbots = $boxbots->sortBy('id'); @endphp
<section class="prj_info">
@include('_partials.table', ['tableArray' => $sorted_boxbots])
</section>

	<div id="popup">
		<img class="{{ $toggleCurrent }}" src="/x__x/loading-99.gif" alt="" />
		<img class="{{ $toggleOther }}" src="/x__x/loading-99.gif" alt="" />
	</div>
@stop

@section('extra-scripts')
	{{-- <nav id="boxhog"><a href="/o__o/boxbots/">BoxBots</a></nav> --}}
	<script src="{{ mix('*__*/boxbots.js', '') }}" async=""></script>

<script>
	function btnSort(aElem, aType, aOrder) {
		var list = document.getElementById('sort--bots');

		var items = list.childNodes;
		var itemsArr = [];
		for (var i in items) {
			if (items[i].nodeType == 1) { // get rid of the whitespace text nodes
				itemsArr.push(items[i]);
			}
		}

		itemsArr.sort(function(a, b) {
			// console.log(a);
			// console.log(a.querySelector('.sort--hide '+aElem));
			if (aType =='text') {
				var aa = a.querySelector('.sort--hide '+aElem).innerHTML.toLowerCase();
				var bb = b.querySelector('.sort--hide '+aElem).innerHTML.toLowerCase();
			} else {
				var aa = parseFloat(a.querySelector('.sort--hide '+aElem).innerHTML);
				var bb = parseFloat(b.querySelector('.sort--hide '+aElem).innerHTML);
			}

			return aa == bb
				? 0
				: (aa > bb ? 1 : -1);
		});

		if (aOrder == "reverse") {
			for (i = itemsArr.length - 1; i >= 0; --i) {
				list.appendChild(itemsArr[i]);
			}
		} else {
			for (i = 0; i < itemsArr.length; ++i) {
				list.appendChild(itemsArr[i]);
			}
		}
	}

	function removeSort(aThis, aElem, aType=null) {
		if (aThis.classList.contains('sort--asc')) {
			aThis.classList.remove('sort--asc');
			aThis.classList.add('sort--desc');
			btnSort(aElem, aType, 'reverse');
		} else if (aThis.classList.contains('sort--desc')) {
			aThis.classList.remove('sort--desc');
			aThis.classList.add('sort--asc');
			btnSort(aElem, aType);
		} else {
			var active = document.querySelector('.sort--desc');
			if (active) {
				active.classList.remove('sort--desc');
			}
			var active = document.querySelector('.sort--asc');
			if (active) {
				active.classList.remove('sort--asc');
			}
			aThis.classList.add('sort--asc');
			btnSort(aElem, aType);
		}
	}

	document.getElementById('btn--height').addEventListener('click', function () {
		removeSort(this, '.sort--height');
	});
	document.getElementById('btn--width').addEventListener('click', function () {
		removeSort(this, '.sort--width');
	});
	document.getElementById('btn--date').addEventListener('click', function () {
		removeSort(this, '.sort--date', 'text');
	});
	document.getElementById('btn--title').addEventListener('click', function () {
		removeSort(this, '.sort--title', 'text');
	});

	// // var tState = document.querySelector('.images--boxbots');
	// var tState = document.body;
	// tState.classList.add('images--color');
	// document.getElementById('btn--toggle').addEventListener('click', function () {
	// 	if (tState.classList.contains('images--colors')) {
	// 		tState.classList.remove('images--colors');
	// 		tState.classList.add('images--shadows');
	// 		this.innerHTML = 'color';
	// 	} else if (tState.classList.contains('images--shadows')) {
	// 		tState.classList.remove('images--shadows');
	// 		tState.classList.add('images--colors');
	// 		this.innerHTML = 'shadow';
	// 	} else {
	// 		tState.classList.add('images--shadows');
	// 		this.innerHTML = 'color';
	// 	}
	// });

	//	// from: https://stackoverflow.com/questions/12551920/capturing-all-the-a-click-event
	// document.querySelector('.images--boxbots').onclick = function(e){
	//   e = e || event;
	//   var from = findParent('a',e.target || e.srcElement);
	//   if (from){
	//      /* it's a link, actions here */
	//      console.log(from.href);
	//      console.log(e.target.src);
	//      console.log(e.target);
	//     document.querySelector('.bot--large').classList.add('is_visible');
	//     document.querySelector('.bot--large .shadow').src = e.target.src.replace("color-small", "shadow-large");
	//     document.querySelector('.bot--large .color').src = e.target.src.replace("color-small", "color-large");
	// 	e.preventDefault();
	//   }
	// }
	// //find first parent with tagName [tagname]
	// function findParent(tagname,el){
	//   while (el){
	//     if ((el.nodeName || el.tagName).toLowerCase()===tagname.toLowerCase()){
	//       return el;
	//     }
	//     el = el.parentNode;
	//   }
	//   return null;
	// }
</script>

@stop
