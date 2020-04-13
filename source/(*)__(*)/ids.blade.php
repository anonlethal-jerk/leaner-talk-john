@extends('_layouts.master')

@section('body')
<body class="body--debug debug--ids">
<div style="display:flex; flex-direction: column; align-items: center; justify-content: center; width:100vw;">

@php
	$t_arrays = [
		$page->collections->boxbots->items,
		$page->collections->daily_photo->items,
		$page->collections->dirty_mousepads->items,
		$page->collections->dots_dots_dots->items,
		$page->collections->arrow_iterations->items,
		$page->collections->flat_mountains->items,
		$page->collections->fucking_windows->items,
		$page->collections->homepages->items,
		$page->collections->iphone_oil_paintings->items,
		$page->collections->layered_wax->items,
		$page->collections->profiles_exchanged->items,
		$page->collections->profiles_reversed->items,
		$page->collections->sd_to_hd->items,
		$page->collections->siri_sound_poems->items,
		$page->collections->touching_film->items,
	];
	$t_ids = [];
		// print_r($t_arrays);
		// print_r($page->collections->dots_dots_dots->items);

	for ($i=0; $i<count($t_arrays); $i++) {
		for ($j=0; $j<count($t_arrays[$i]); $j++) {
			// print_r($t_arrays[$i][$j]);
			$the_id_full = explode('_', $t_arrays[$i][$j]['id']);
			// print_r($the_id_full);
			$the_id = array_slice($the_id_full, 0, 3);
			if (in_array($the_id, $t_ids)) {
				echo ('<div style="color:red;">'.$t_arrays[$i][$j]['slug'].' : '.$t_arrays[$i][$j]['id'].'</div>');
			} else {
				$t_ids[] = $the_id;
			}
		}
	}
@endphp

<h1>{{ count($t_arrays) }}</h1>
{{-- <pre>{{ print_r($t_ids) }}</pre> --}}
</div>

@endsection
