@php
	$page->title = 'Punchlist';
	$page->meta_description = 'Stuff I gotta do. Stuff I got done.';
@endphp

@extends('_layouts.master')

@section('body')
<body class="body--punchlists punchlist--website">
	<article style="padding: 2rem;">

@php
	$punchlists = [
		'website' => [
			'items' => [
				[
					'id'          => '2020_04_01-',
					'based_on_id' => '',
					'title'       => '',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_16-3',
					'based_on_id' => '2020_04_16-2',
					'title'       => 'can I get rid of the individual project series files as well?',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_16-2',
					'based_on_id' => '',
					'title'       => 'Get rid of the "single-project" layout files',
					'description' => '',
					'date_done'   => '2020_04_16',
				],
				[
					'id'          => '2020_04_16-1',
					'based_on_id' => '',
					'title'       => 'svg connection bewteen table rows on projects page',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-11',
					'based_on_id' => '2020_04_15-09',
					'title'       => 'How to relate one to do item to another (based on previous item)?',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-10',
					'based_on_id' => '2020_04_15-09',
					'title'       => 'Add nice crossing out via canvas to dones',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-09',
					'based_on_id' => '',
					'title'       => 'Create this punchlist page!',
					'description' => '',
					'date_done'   => '2020_04_15',
				],
				[
					'id'          => '2020_04_15-08',
					'based_on_id' => '',
					'title'       => 'disable animation of navigation if not interacting with screen (mousemove timer)',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-07',
					'based_on_id' => '',
					'title'       => 'disable animation of navigation if motion sensitive (accessibility)',
					'description' => 'will need a navburger?',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-06',
					'based_on_id' => '2020_04_15-01',
					'title'       => 'do I need a way to choose twitter summary image size?',
					'description' => 'summary vs. summary_large_image',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-05',
					'based_on_id' => '2020_04_15-01',
					'title'       => 'Create new image sizes output actions for social',
					'description' => 'BoxBots, etc. to be 1024x512, 1200x630, or 1024x1024? and under 1mb',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-04',
					'based_on_id' => '2020_04_15-03',
					'title'       => 'change project table rollover image pop-up to lazyload somehow?',
					'description' => 'is that duping content? webp vs. png so not too much bandwidth',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-03',
					'based_on_id' => '',
					'title'       => 'Fix BoxBots js click on mobile (wasn’t showing the color image)',
					'description' => '',
					'date_done'   => '2020_04_14',
				],
				[
					'id'          => '2020_04_15-02',
					'based_on_id' => '',
					'title'       => 'Add social images for Daily Photo pages (singles and main)',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-01',
					'based_on_id' => '',
					'title'       => 'Add social image for main BoxBots Submissions page',
					'description' => '',
					'date_done'   => '2020_04_15',
				],
			],
		],
	];

	$t_to_dos = [];
	$t_dones  = [];
	$t_last_date  = '';

	foreach ($punchlists['website']['items'] as $item) {
		if ($item['date_done'] == '') {
			$t_to_dos[] = $item;
		} else {
			$t_dones[] = $item;
		}
	}
	array_multisort(array_column($t_to_dos, 'id'), SORT_DESC, $t_to_dos);
	array_multisort(array_column($t_dones, 'date_done'), SORT_DESC, array_column($t_dones, 'id'), SORT_DESC, $t_dones);
/*
array_multisort(array_column($punchlists['website']['items'], 'date_done'), SORT_ASC,
                array_column($punchlists['website']['items'], 'id'), SORT_DESC,
                $punchlists['website']['items']);
*/
@endphp

		<h1>To Dos:</h1>
		<ul>
@foreach ($t_to_dos as $item)
			<li><strong>{!! $item['title'] !!}</strong>{!! $item['description'] == '' ? '' : '<br>'.$item['description'] !!}</li>
@endforeach
		</ul>
		<h2>Dones:</h2>
		<ul>
@foreach ($t_dones as $item)
@if ($t_last_date != $item['date_done'])
		</ul>
		{{ $item['date_done'] }}:
		<ul>
@endif
			<li><del datetime="{{ $item['date_done'] }}"><strong>{!! $item['title'] !!}</strong>{!! $item['description'] == '' ? '' : '<br>'.$item['description'] !!}</del></li>
@php
	$t_last_date = $item['date_done']
@endphp
@endforeach
		</ul>
	</article>

@endsection

@section('extra-nav')
	<nav id="feralhog" class="hog"><a href="/o__o/">Projects</a></nav>
@endsection
