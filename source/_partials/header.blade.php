<!DOCTYPE html>
<html class="no-js" lang="en">
@php
	if ( $page->nontitle != null ) {
		if ( $page->nontitle == 'none' ) {
			$t_title = '';
		} else {
			$t_title = $page->nontitle;
		}
	} else if ( $page->title == '' &&  $page->subtitle != null) {
		$t_title = 'Untitled ('.$page->subtitle.')';
	} else if ( $page->title == '' ) {
		$t_title = 'Untitled';
	} else {
		$t_title = $page->title;
	}
	if ( $page->person != null ) {
		$t_title .= ' by '.$page->person;
	}

	if ($t_title != '' && $page->series_info->title != '') {
		$t_separator = ' — ';
	} else {
		$t_separator = '';
	}

	if ($page->meta_description != '') {
		$t_meta_description = $page->meta_description;
	} else if ($page->series_info->meta_description != '') {
		$t_meta_description = $page->series_info->meta_description;
	} else {
		$t_meta_description = 'work from JK Keller';
	}

	if ($page->open_graph_image != '') {
		$t_open_graph_image = $page->open_graph_image;
	} else if ($page->series_info->open_graph_image != '') {
		$t_open_graph_image = $page->series_info->open_graph_image;
	} else {
		$t_open_graph_image = 'https://jk-keller.com/x__x/jk_keller-home-open_graph-1200x630.png';
	}

	if ($page->twitter_image != '') {
		$t_twitter_image = $page->twitter_image;
	} else if ($page->series_info->twitter_image != '') {
		$t_twitter_image = $page->series_info->twitter_image;
	} else {
		$t_twitter_image = 'https://jk-keller.com/x__x/jk_keller-home-twitter-1024x512.png';
	}

	if ($page->twitter_card_type != '') {
		$t_twitter_card_type = $page->twitter_card_type;
	} else if ($page->series_info->twitter_card_type != '') {
		$t_twitter_card_type = $page->series_info->twitter_card_type;
	} else {
		$t_twitter_card_type = 'summary_large_image';
	}
@endphp
	<head>
		<meta charset="utf-8">
		<title>{{ $t_title }}{{ $t_separator }}{{ $page->series_info->title }} •__• JK</title>
		<meta name="description" content="{{ $t_meta_description }}">
		<meta name="image" content="{{ $t_open_graph_image }}">
{{-- Schema.org for Google --}}
		<meta itemprop="name" content="{{ $t_title }}{{ $t_separator }}{{ $page->series_info->title }} •__• JK">
		<meta itemprop="description" content="{{ $t_meta_description }}">
		<meta itemprop="image" content="{{ $t_open_graph_image }}">
{{-- Twitter --}}
		<meta name="twitter:card" content="{{ $t_twitter_card_type }}">
		{{-- <meta name="twitter:title" content="{{ $t_title }}{{ $t_separator }}{{ $page->series_info->title }} •__• JK"> --}}
		{{-- <meta name="twitter:description" content="{{ $t_meta_description }}"> --}}
		{{-- <meta name="twitter:image" content="{{ $t_twitter_image }}"> --}}
		{{-- <meta name="twitter:player" content="https://video-source.youtube"> --}}
		{{-- <meta name="twitter:site" content="@anonlethal_jerk"> --}}
		{{-- <meta name="twitter:creator" content="@anonlethal_jerk"> --}}
{{-- Open Graph general (Facebook, Pinterest & Google+) --}}
		<meta name="og:title" content="{{ $t_title }}{{ $t_separator }}{{ $page->series_info->title }} •__• JK">
		<meta name="og:description" content="{{ $t_meta_description }}">
		<meta name="og:image" content="{{ $t_open_graph_image }}">
		{{-- <meta name="og:video" content="https://video.mov?"> --}}
		<meta name="og:url" content="{{ substr($page->getUrl(), -1) == '/' ? $page->getUrl() : $page->getUrl().'/' }}">
		{{-- <meta name="og:site_name" content="JK site name"> --}}
		<meta name="og:locale" content="en_US">
		<meta name="og:type" content="website">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#87de00">
		<meta name="msapplication-TileColor" content="#87de00">
		<meta name="theme-color" content="#87de00">

		<link rel="stylesheet" href="{{ mix('0__0/main.css', '') }}" type="text/css">

		@yield('extra-head')
	</head>
