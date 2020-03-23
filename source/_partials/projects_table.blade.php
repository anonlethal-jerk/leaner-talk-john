<table class="table--series_info">
	@if ($seriesHead == true)
	<thead>
		<tr>
			{{-- <th class="td--series_id">ID</th> --}}
			<th class="td--series_title">Title</th>
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
			{{-- <td class="td--series_id">{{ $seriesArray['id'] }}</td> --}}
			<td class="td--series_title{{ $seriesArray['title'] == '' ? ' td--empty' : '' }}"><h1><a href="/o__o/{{ $seriesArray['slug'] }}"><cite>{{ $seriesArray['title'] }}</cite></a></h1></td>
			<td class="td--series_description{{ $seriesArray['description'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['description'] !!}</td>
			{{-- <td class="td--series_medium">{{ $seriesArray['medium'] }}</td> --}}
			<td class="td--series_date no_break{{ $seriesArray['nice_date'] == '' ? ' td--empty' : '' }}">{{ $seriesArray['nice_date'] }}</td>
			{{-- <td class="td--series_dimensions no_break">{{ $seriesArray['height'] }} × {{ $seriesArray['width'] }} {{ $seriesArray['units'] }}</td> --}}
			{{-- <td class="td--series_location">{{ $seriesArray['location'] }}</td> --}}
			<td class="td--series_status{{ $seriesArray['status'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['status'] !!}</td>
			<td class="td--series_notes{{ $seriesArray['notes'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['notes'] !!}</td>
			{{-- <td class="td--series_to_dos">{!! $seriesArray['to_dos'] !!}</td> --}}
			{{-- <td class="td--series_hidden">{!! $seriesArray['hidden'] !!}</td> --}}
		</tr>
	</tbody>
</table>
