<table class="table--projects">
	@if ($seriesHead == true)
	<thead>
		<tr>
			{{-- <th class="td--project_id">ID</th> --}}
			<th class="td--project_title">Title</th>
			<th class="td--project_description">Description</th>
			{{-- <th class="td--project_subtitle">Subtitle</th> --}}
			{{-- <th class="td--project_slug">Slug</th> --}}
			{{-- <th class="td--project_medium">Medium</th> --}}
			<th class="td--project_date">Date</th>
			{{-- <th class="td--project_dimensions">Dimensions <span class="no_break">(H × W)</span></th> --}}
			{{-- <th class="td--project_duration">Duration (H:M:S)</th> --}}
			{{-- <th class="td--project_location">Location</th> --}}
			<th class="td--project_status">Status</th>
			{{-- <th class="td--project_description">Description</th> --}}
			<th class="td--project_notes">Notes</th>
			{{-- <th class="td--project_to_dos">To Dos</th> --}}
			{{-- <th class="td--project_hidden">Hidden</th> --}}
		</tr>
	</thead>
	@endif
 	<tbody>
		<tr>
			{{-- <td class="td--project_id">{{ $seriesArray['id'] }}</td> --}}
			<td class="td--project_title{{ $seriesArray['title'] == '' ? ' td--empty' : '' }}"><h1><a href="/o__o/{{ $seriesArray['slug'] }}"><cite>{{ $seriesArray['title'] }}</cite></a></h1></td>
			<td class="td--project_description{{ $seriesArray['description'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['description'] !!}</td>
			{{-- <td class="td--project_medium">{{ $seriesArray['medium'] }}</td> --}}
			<td class="td--project_date no_break{{ $seriesArray['nice_date'] == '' ? ' td--empty' : '' }}">{{ $seriesArray['nice_date'] }}</td>
			{{-- <td class="td--project_dimensions no_break">{{ $seriesArray['height'] }} × {{ $seriesArray['width'] }} {{ $seriesArray['units'] }}</td> --}}
			{{-- <td class="td--project_location">{{ $seriesArray['location'] }}</td> --}}
			<td class="td--project_status{{ $seriesArray['status'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['status'] !!}</td>
			<td class="td--project_notes{{ $seriesArray['notes'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['notes'] !!}</td>
			{{-- <td class="td--project_to_dos">{!! $seriesArray['to_dos'] !!}</td> --}}
			{{-- <td class="td--project_hidden">{!! $seriesArray['hidden'] !!}</td> --}}
		</tr>
	</tbody>
</table>
