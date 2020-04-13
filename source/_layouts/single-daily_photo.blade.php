@php
	$t_slug   = $page->series_daily_photo->slug;
	$t_series = $page->series_daily_photo->title;
	$t_js     = $page->series_daily_photo->js;

	if ($page->slug == 'all_through_last_year') {
		$t_extends = '_layouts.single-image_viewer-large';
	} else {
		$t_extends = '_layouts.single-image_viewer';
	}
@endphp

@extends($t_extends)
