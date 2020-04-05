@php
	$t_series_array = $page->series_touching_film;
	$t_slug         = $page->series_touching_film->slug;
	$t_series       = $page->series_touching_film->title;
	$t_js           = $page->series_touching_film->js ;
@endphp

@extends('_layouts.series')
