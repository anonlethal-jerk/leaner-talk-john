@php
	$page->html_title = $page->title;
@endphp
@include('_partials.header')

<body class="body--post">
{{ $posts->count() }}

@yield('content')

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="/o__-/">Blog or Whatever</a></nav>
@endsection

@include('_partials.footer')
