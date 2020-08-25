@php
	$page->title = 'Helpers?';
	$page->html_title = $page->title;
	$page->meta_description = 'helper pages?';
@endphp

@extends('_layouts.master')

@section('body')
<body class="body--debug">
<div style="display:flex; flex-direction: column; align-items: center; justify-content: center; width:100vw;">


<ul>
	<li><a href="ids/">dupe ids?</a></li>
</ul>

</div>
@endsection
