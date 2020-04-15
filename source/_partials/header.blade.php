<!DOCTYPE html>
<html class="no-js" lang="en">
@php
if ($page->title != '' && $t_series != '') {
	$separator = ' — ';
} else {
	$separator = '';
}
@endphp
	<head>
		<meta charset="utf-8">
		<title>{{ $page->title }}{{ $separator }}{{ $t_series }} •__• JK</title>
		<meta name="description" content="{{ $t_meta_description != '' ? $t_meta_description : 'work from JK Keller' }}">
		<meta name="image" content="{{ $page->open_graph_image != '' ? $page->open_graph_image : 'https://jk-keller.com/x__x/jk_keller-home-open_graph-1200x630.png' }}">

		{{-- Schema.org for Google --}}
		<meta itemprop="name" content="{{ $page->title }}{{ $separator }}{{ $t_series }} •__• JK">
		<meta itemprop="description" content="{{ $t_meta_description != '' ? $t_meta_description : 'work from JK Keller' }}">
		<meta itemprop="image" content="{{ $page->open_graph_image != '' ? $page->open_graph_image : 'https://jk-keller.com/x__x/jk_keller-home-open_graph-1200x630.png' }}">
		{{-- Twitter --}}
		<meta name="twitter:card" content="summary">
		<meta name="twitter:title" content="{{ $page->title }}{{ $separator }}{{ $t_series }} •__• JK">
		<meta name="twitter:description" content="{{ $t_meta_description != '' ? $t_meta_description : 'work from JK Keller' }}">
		{{-- <meta name="twitter:site" content="@anonlethal_jerk"> --}}
		{{-- <meta name="twitter:creator" content="@anonlethal_jerk"> --}}
		<meta name="twitter:image:src" content="{{ $page->twitter_image != '' ? $page->twitter_image : 'https://jk-keller.com/x__x/jk_keller-home-twitter-1024x512.png' }}">
		{{-- <meta name="twitter:player" content="https://video-source.youtube"> --}}
		{{-- Open Graph general (Facebook, Pinterest & Google+) --}}
		<meta name="og:title" content="{{ $page->title }}{{ $separator }}{{ $t_series }} •__• JK">
		<meta name="og:description" content="{{ $t_meta_description != '' ? $t_meta_description : 'work from JK Keller' }}">
		<meta name="og:image" content="{{ $page->open_graph_image != '' ? $page->open_graph_image : 'https://jk-keller.com/x__x/jk_keller-home-open_graph-1200x630.png' }}">
		{{-- <meta name="og:url" content="https://this-url?.com"> --}}
		{{-- <meta name="og:site_name" content="JK site name"> --}}
		<meta name="og:locale" content="en_US">
		{{-- <meta name="og:video" content="https://video.mov?"> --}}
		<meta name="og:type" content="website">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="/apple-touch-icon-precomposed.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#87de00">
		<meta name="msapplication-TileColor" content="#87de00">
		<meta name="theme-color" content="#87de00">

		<link rel="stylesheet" href="{{ mix('0__0/main.css', '') }}" type="text/css">
	</head>





