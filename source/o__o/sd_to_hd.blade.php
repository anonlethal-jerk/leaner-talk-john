@php
	$t_series_array = $page->series_sd_to_hd;
	$t_slug         = $page->series_sd_to_hd->slug;
	$t_series       = $page->series_sd_to_hd->title;
	$t_js           = $page->series_sd_to_hd->js ;
@endphp

@extends('_layouts.series')
