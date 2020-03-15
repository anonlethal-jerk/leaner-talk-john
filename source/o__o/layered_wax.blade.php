@php
	$t_series_array = $page->series_layered_wax;
	$t_slug         = $page->series_layered_wax->slug;
	$t_series       = $page->series_layered_wax->title;
	$t_js           = $page->series_layered_wax->js ;
@endphp

@extends('_layouts.series')
