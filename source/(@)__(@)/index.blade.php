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
					'section'     => '',
					'title'       => '',
					'description' => '',
					'date_done'   => '',
				],

				[
					'id'          => '2020_04_26-',
					'based_on_id' => '',
					'section'     => '',
					'title'       => '',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_26-2',
					'based_on_id' => '',
					'section'     => 'projects',
					'title'       => 'version where just keep adding lines to svg based on width',
					'description' => 'faded out over time? overflow:hidden?',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_26-1',
					'based_on_id' => '',
					'section'     => 'projects',
					'title'       => 'fix end lines not drawing on svgs',
					'description' => 'was due to scrollbar appearing after drawing svgs',
					'date_done'   => '2020_04_26',
				],
				[
					'id'          => '2020_04_25-2',
					'based_on_id' => '',
					'section'     => 'image_viewer',
					'title'       => 'add arrow key control of navigation',
					'description' => '',
					'date_done'   => '2020_04_25',
				],
				[
					'id'          => '2020_04_25-1',
					'based_on_id' => '2020_04_24-2',
					'section'     => 'flat_mountains',
					'title'       => 'added a couple more',
					'description' => '',
					'date_done'   => '2020_04_25',
				],
				[
					'id'          => '2020_04_24-2',
					'based_on_id' => '2020_04_24-1',
					'section'     => 'flat_mountains',
					'title'       => 'add the rest of the images...',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_24-1',
					'based_on_id' => '2020_04_19-4',
					'section'     => 'flat_mountains',
					'title'       => 'Add the Tantamounts',
					'description' => '',
					'date_done'   => '2020_04_24',
				],
				[
					'id'          => '2020_04_22-2',
					'based_on_id' => '2020_04_19-3',
					'section'     => 'global',
					'title'       => 'why fb og:image throwing "error" in debugger?',
					'description' => 'maybe og:image:url ? NOPE<br> maybe move up under title? NOPE. Add space and closing slash to meta tag? NOPE',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_22-1',
					'based_on_id' => '2020_04_16-1',
					'section'     => 'projects',
					'title'       => 'fix line connections on svg... cell widths off',
					'description' => 'getBoundingClientRect() gives floating point width',
					'date_done'   => '2020_04_22',
				],
				[
					'id'          => '2020_04_21-1',
					'based_on_id' => '',
					'section'     => 'global',
					'title'       => 'get loading images to be correct dimensions',
					'description' => '',
					'date_done'   => '2020_04_21',
				],
				[
					'id'          => '2020_04_20-4',
					'based_on_id' => '2020_04_19-4',
					'section'     => 'dots_dots_dots',
					'title'       => 'fix dot drawing images',
					'description' => '',
					'date_done'   => '2020_04_21',
				],
				[
					'id'          => '2020_04_20-3',
					'based_on_id' => '',
					'section'     => 'image-viewers',
					'title'       => 'add simple "back" button',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_20-2',
					'based_on_id' => '',
					'section'     => 'o__o',
					'title'       => 'fix social title for projects page',
					'description' => 'elsewheres?',
					'date_done'   => '2020_04_20',
				],
				[
					'id'          => '2020_04_20-1',
					'based_on_id' => '',
					'section'     => 'global',
					'title'       => 'add image alt tags to social images',
					'description' => 'og:image:alt',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_19-7',
					'based_on_id' => '',
					'section'     => '(@)__(@)',
					'title'       => 'gimme some style, boy',
					'description' => '',
					'date_done'   => '2020_04_19',
				],
				[
					'id'          => '2020_04_19-6',
					'based_on_id' => '',
					'section'     => 'GLOBAL',
					'title'       => 'Right, y’know, like, add some f’ing new work',
					'description' => 'maybe that’s my alter ego?',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_19-5',
					'based_on_id' => '2020_04_19-4',
					'section'     => 'Global',
					'title'       => 'add type over migrated images',
					'description' => 'scripted dude',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_19-4',
					'based_on_id' => '',
					'section'     => 'GLOBAL',
					'title'       => 'Guess I should get all old projects migrated over...',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_19-3',
					'based_on_id' => '2020_04_15-05',
					'section'     => 'Global',
					'title'       => 'Fix header meta data for social sharing',
					'description' => 'titles, images, descriptions pulling from right places and falling back',
					'date_done'   => '2020_04_19',
				],
				[
					'id'          => '2020_04_19-2',
					'based_on_id' => '',
					'section'     => 'Home',
					'title'       => 'figure out failed encodings',
					'description' => '/9.881313e-3242 %a2__2.652495e-3152 %a2/ + /%C3%A2%C2%80%C2%A2__%C3%A2%C2%80%C2%A2/ <del>(maybe - /%E2%80%A2__%E2%80%A2)</del>',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_19-1',
					'based_on_id' => '',
					'section'     => 'boxbots/Submissions',
					'title'       => 'may have .png versions of large being linked somehow?',
					'description' => 'social?',
					'date_done'   => '2020_04_19',
				],
				[
					'id'          => '2020_04_18-1',
					'based_on_id' => '',
					'section'     => 'Global',
					'title'       => 'make global default image of me interacting with website',
					'description' => 'like cheesy meme?',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_16-3',
					'based_on_id' => '2020_04_16-2',
					'section'     => 'Global',
					'title'       => 'can I get rid of the individual project series files as well?',
					'description' => 'Got one step closer at least',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_16-2',
					'based_on_id' => '',
					'section'     => 'Global',
					'title'       => 'Get rid of the "single-project" layout files',
					'description' => '',
					'date_done'   => '2020_04_16',
				],
				[
					'id'          => '2020_04_16-1',
					'based_on_id' => '',
					'section'     => 'o__o',
					'title'       => 'svg connection bewteen table rows on projects page',
					'description' => '',
					'date_done'   => '2020_04_18',
				],
				[
					'id'          => '2020_04_15-11',
					'based_on_id' => '2020_04_15-09',
					'section'     => '(@)__(@)',
					'title'       => 'How to relate one to do item to another (based on previous item)?',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-10',
					'based_on_id' => '2020_04_15-09',
					'section'     => '(@)__(@)',
					'title'       => 'Add nice crossing out via canvas to dones',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-09',
					'based_on_id' => '',
					'section'     => '(@)__(@)',
					'title'       => 'Create this punchlist page!',
					'description' => '',
					'date_done'   => '2020_04_15',
				],
				[
					'id'          => '2020_04_15-08',
					'based_on_id' => '',
					'section'     => 'Hogs',
					'title'       => 'disable animation of navigation if not interacting with screen (mousemove timer)',
					'description' => '',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-07',
					'based_on_id' => '',
					'section'     => 'Hogs',
					'title'       => 'disable animation of navigation if motion sensitive (accessibility)',
					'description' => 'will need a navburger? - @media (prefers-reduced-motion: reduce)',
					'date_done'   => '',
				],
				[
					'id'          => '2020_04_15-06',
					'based_on_id' => '2020_04_15-01',
					'section'     => 'Global',
					'title'       => 'do I need a way to choose twitter summary image size?',
					'description' => 'summary vs. summary_large_image',
					'date_done'   => '2020_04_18',
				],
				[
					'id'          => '2020_04_15-05',
					'based_on_id' => '2020_04_15-01',
					'section'     => 'Global',
					'title'       => 'Create new image sizes output actions for social',
					'description' => 'BoxBots, etc. to be 1024x512, 1200x630, or 1024x1024? and under 1mb',
					'date_done'   => '2020_04_19',
				],
				[
					'id'          => '2020_04_15-04',
					'based_on_id' => '2020_04_15-03',
					'section'     => 'Global',
					'title'       => 'change project table rollover image pop-up to lazyload somehow?',
					'description' => 'went with modernizr to check for support... may revisit?<br>is that duping content? webp vs. png so not too much bandwidth',
					'date_done'   => '2020_04_24',
				],
				[
					'id'          => '2020_04_15-03',
					'based_on_id' => '',
					'section'     => 'boxbots',
					'title'       => 'Fix BoxBots js click on mobile (wasn’t showing the color image)',
					'description' => '',
					'date_done'   => '2020_04_14',
				],
				[
					'id'          => '2020_04_15-02',
					'based_on_id' => '',
					'section'     => 'daily_photo',
					'title'       => 'Add social images for Daily Photo pages (singles and main)',
					'description' => '',
					'date_done'   => '2020_04_18',
				],
				[
					'id'          => '2020_04_15-01',
					'based_on_id' => '',
					'section'     => 'boxbots',
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
			<li><span class="punchlist--section">{{ $item['section'] }} -</span> <strong>{!! $item['title'] !!}</strong>{!! $item['description'] == '' ? '' : '<br>'.$item['description'] !!}</li>
@endforeach
		</ul>
		<h2>Dones:</h2>
		<ul>
@foreach ($t_dones as $item)
@if ($t_last_date != $item['date_done'])
		</ul>
		<h3>{{ $item['date_done'] }}:</h3>
		<ul>
@endif
			<li><del datetime="{{ $item['date_done'] }}"><span class="punchlist--section">{{ $item['section'] }} -</span> <strong>{!! $item['title'] !!}</strong>{!! $item['description'] == '' ? '' : '<br>'.$item['description'] !!}</del></li>
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
