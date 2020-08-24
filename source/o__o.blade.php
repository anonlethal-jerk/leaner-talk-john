@php
	$page->nontitle = 'Projects';
	$page->meta_description = 'work done by JK Keller';
	$page->twitter_image = 'https://jk-keller.com/x__x/jk_keller-home-twitter-1024x512.png';
	$page->open_graph_image = 'https://jk-keller.com/x__x/jk_keller-home-open_graph-1200x630.png';
	$series_first = true;
@endphp

@extends('_layouts.master', array('t_html_title'=>$page->nontitle))

@section('body')
<body class="body--projects body--projects--lines">
	<section class="tables--done series_info">
		<h2 class="babeckett">You must go on.</h2>
{{-- 		<h2>How do I get this list automatically from Jigsaw?</h2>
		<p>"Temp image from migration..." lorem pictum, greek images, pictem ipsum, lorem pixum, pixel holder, filler text/image, TBD, TK, to come, placeholder, dummy image, hold for, temporary, demonstration only, example, draft, space filler, substitute, stand-in, for the time being, while I build out the website, interim, stopgap, acting, preliminary image, waiting for final image, draft-v1-edit2-almost-final.jpg, boilerplate, not available, replace when available, unfinished documentation, to be documented properly, please stand by</p>
 --}}
@foreach ($page->projects->where('published', '===', true) as $project)
	@if ($project->series === true)
		@php
			$project_array = 'series_'.$project['slug'];
		@endphp
		@include('_partials.projects_table', ['seriesArray' => $$project_array, 'seriesHead' => $series_first ])
	@else
		@include('_partials.projects_table', ['seriesArray' => $project, 'seriesHead' => $series_first ])
	@endif
	@php
		$series_first = false;
	@endphp
@endforeach
	</section>

	<section class="tables--to_do series_info">
		<h2 class="babeckett">I can’t go on.</h2>
@foreach ($page->projects->where('published', '==', false) as $project)
	@if ($project->series === true)
		@php
			$project_array = 'series_'.$project['slug'];
		@endphp
		@include('_partials.projects_table', ['seriesArray' => $$project_array, 'notYet' => true ])
	@else
		@include('_partials.projects_table', ['seriesArray' => $project, 'notYet' => true ])
	@endif
@endforeach

		<h2 class="babeckett">I’ll go on.</h2>
		{{-- COMMENT: Keep the id=terms element, as it defines if deskto size or not --}}
		<p id="terms" class="terms"><a href="/terms_and_conditions/">Website Terms</a></p>
		{{-- <p id="punchlist" class="punchlist"><a href="/(@)__(@)/">punchlist</a></p> --}}
	</section>
@endsection

@section('extra-scripts')
	<script src="{{ mix('*__*/projects.js', '') }}"></script>
@endsection
