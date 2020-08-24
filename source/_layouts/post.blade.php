@include('_partials.header', array('t_html_title'=>$page->title))

<body class="body--post">
{{ $posts->count() }}

@yield('content')

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="/o__-/">Blog or Whatever</a></nav>
@endsection

@include('_partials.footer')
