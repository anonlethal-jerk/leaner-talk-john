@php
	// $id = array_search('jumper_bumpers', array_column($gfg_array, 'slug'));

	$page->project = $page->projects->where('slug', '===', 'jumper_bumpers')->first();
	$page->title = $page->project->title;
	$page->meta_description = $page->project->description;
	$page->open_graph_image = $page->project->open_graph_image;
	$page->twitter_image = $page->project->twitter_image;
@endphp

@extends('_layouts.single-image_viewer')
