@php
	$t_series_array = $page->series_flat_mountains;
	$t_slug         = $page->series_flat_mountains->slug;
	$t_series       = $page->series_flat_mountains->title;
	$t_js           = $page->series_flat_mountains->js ;
@endphp

@extends('_layouts.series')
