@php
	$t_series_array = $page->series_homepages;
	$t_slug         = $page->series_homepages->slug;
	$t_series       = $page->series_homepages->title;
	$t_js           = $page->series_homepages->js ;
@endphp

@extends('_layouts.series')
