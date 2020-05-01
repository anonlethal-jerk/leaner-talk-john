@php
	$page->nontitle = 'none';
	// $page->series_title = 'Jonathan Keller Keller';
	$page->meta_description = 'Remember in the Future When we were Happy?';
	$page->twitter_image = 'https://jk-keller.com/x__x/jk_keller-home-twitter-1024x512.png';
	$page->open_graph_image = 'https://jk-keller.com/x__x/jk_keller-home-open_graph-1200x630.png';
@endphp

@section('extra-head')
	<link rel="canonical" href="https://jk-keller.com/" />
@endsection

@extends('_layouts.master')

@section('body')
<body class="body--home">
	<h1 class="visuallyhidden">Jonathan Keller Keller</h1>
	<div class="home_color"></div>
	<nav><a href="/o__o/" id="warthog" class="hog">Remember in the Future<br>When we were Happy?</a></nav>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
{{--
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
	<div class="hog" aria-hidden="true">Remember in the Future<br>When we were Happy?</div>
--}}
@endsection

@section('extra-scripts')
	<script src="{{ mix('*__*/home.js', '') }}" async=""></script>
	<script src="/*__*/jquery.min.js"></script>
@endsection
