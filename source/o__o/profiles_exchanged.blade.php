@php
	$t_series_array = $page->series_profiles_exchanged;
	$t_slug         = $page->series_profiles_exchanged->slug;
	$t_series       = $page->series_profiles_exchanged->title;
	$t_js           = $page->series_profiles_exchanged->js ;
@endphp

@extends('_layouts.series')
