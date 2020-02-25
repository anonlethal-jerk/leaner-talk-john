@php
	$t_series_array = $page->series_dirty_mousepads;
	$t_slug         = $page->series_dirty_mousepads->slug;
	$t_series       = $page->series_dirty_mousepads->title;
	$t_js           = $page->series_dirty_mousepads->js;
@endphp

@extends('_layouts.series')
