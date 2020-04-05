@php
	$t_series_array = $page->series_profiles_reversed;
	$t_slug         = $page->series_profiles_reversed->slug;
	$t_series       = $page->series_profiles_reversed->title;
	$t_js           = $page->series_profiles_reversed->js ;
@endphp

@extends('_layouts.series')
