{{-- @php
	$t_keys = $seriesArray->keys();
@endphp

<table class="table table-striped">
	<thead>
		<tr>
			@foreach($t_keys as $key)
				<th>{{ $key }}</th>
			@endforeach
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>
 --}}
<table class="table--series_info table--this_page">
	@if ($seriesHead == true)
	<thead>
		<tr>
			<th class="td--series_home">👻</th>
			{{-- <th class="td--series_id">ID</th> --}}
			<th class="td--series_title">Title</th>
			<th class="td--series_title">Subpages</th>
			<th class="td--series_description">Description</th>
			{{-- <th class="td--series_subtitle">Subtitle</th> --}}
			{{-- <th class="td--series_slug">Slug</th> --}}
			{{-- <th class="td--series_medium">Medium</th> --}}
			<th class="td--series_date">Date</th>
			{{-- <th class="td--series_dimensions">Dimensions <span class="no_break">(H × W)</span></th> --}}
			{{-- <th class="td--series_duration">Duration (H:M:S)</th> --}}
			{{-- <th class="td--series_location">Location</th> --}}
			<th class="td--series_status">Status</th>
			{{-- <th class="td--series_description">Description</th> --}}
			<th class="td--series_notes">Notes</th>
			{{-- <th class="td--series_to_dos">To Dos</th> --}}
			{{-- <th class="td--series_hidden">Hidden</th> --}}
		</tr>
	</thead>
	@endif
	<tbody>
		<tr>
		@if ($seriesArray['title'] == 'BoxBot Submissions')
			<td data-label="👻" class="td--series_home"><a href="/o__o/boxbots/">↖︎</a></td>
		@elseif ($seriesArray['title'] == 'BoxBots')
			<td data-label="👻" class="td--series_home"><a href="/o__o/">↖︎</a></td>
		@else
			<td data-label="👻" class="td--series_home"><a href="../">↖︎</a></td>
		@endif
			{{-- <td data-label="ID" class="td--series_id">{{ $seriesArray['id'] }}</td> --}}
			<td data-label="Title" class="td--series_title{{ $seriesArray['title'] == '' ? ' td--empty' : '' }}"><h1>{{-- <a href="/o__o/{{ $seriesArray['slug'] }}/"> --}}<cite>{{ $seriesArray['title'] }}</cite>{{-- </a> --}}</h1></td>
		@if (isset ($seriesArray['pages']))
			<td data-label="Subpages" class="td--series_subpages">
			@foreach ($seriesArray['pages'] as $page)
					<p><strong><a href="/o__o/{{ $seriesArray['slug'] }}/{{ $page['slug'] }}/">{{ $page['title'] }}</a></strong></p>
			@endforeach
			</td>
		@else
			<td data-label="Subpages" class="td--series_notes td--empty"></td>
		@endif
			<td data-label="Description" class="td--series_description{{ $seriesArray['description'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['description'] !!}</td>
			{{-- <td data-label="Medium" class="td--series_medium">{{ $seriesArray['medium'] }}</td> --}}
			<td data-label="Date" class="td--series_date no_break{{ $seriesArray['nice_date'] == '' ? ' td--empty' : '' }}">{{ $seriesArray['nice_date'] }}</td>
			{{-- <td data-label="Size" class="td--series_dimensions no_break">{{ $seriesArray['height'] }} × {{ $seriesArray['width'] }} {{ $seriesArray['units'] }}</td> --}}
			{{-- <td data-label="Location" class="td--series_location">{{ $seriesArray['location'] }}</td> --}}
			<td data-label="Status" class="td--series_status{{ $seriesArray['status'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['status'] !!}</td>
			<td data-label="Notes" class="td--series_notes{{ $seriesArray['notes'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['notes'] !!}</td>
			{{-- <td data-label="To Dos" class="td--series_to_dos">{!! $seriesArray['to_dos'] !!}</td> --}}
			{{-- <td data-label="Hidden" class="td--series_hidden">{!! $seriesArray['hidden'] !!}</td> --}}
		</tr>
	</tbody>
</table>
