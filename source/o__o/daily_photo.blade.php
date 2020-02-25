@php
	$t_series_array = $page->series_daily_photo;
	$t_slug         = $page->series_daily_photo->slug;
	$t_series       = $page->series_daily_photo->title;
	$t_js           = $page->series_daily_photo->js;
@endphp

@extends('_layouts.series')
