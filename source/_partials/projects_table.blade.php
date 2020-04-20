<table class="table--projects">
	@if ($seriesHead == true)
	<thead>
		<tr>
			{{-- <th class="td--project_id">ID</th> --}}
			<th class="td--project_title">Title</th>
			<th class="td--project_subpages">Subpages</th>
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
			{{-- <td data-label="ID" class="td--project_id">{{ $seriesArray['id'] }}</td> --}}
			<td data-label="Title" class="td--project_title{{ $seriesArray['title'] == '' ? ' td--empty' : '' }}"><a href="/o__o/{{ $seriesArray['slug'] }}/"><h1><cite>{{ $seriesArray['title'] }}</cite></h1>{!! isset($seriesArray['subtitle']) ? '<h2 class="h2--subtitle">('.$seriesArray['subtitle'].')</h2>' : '' !!}</a></td>
		@if (isset ($seriesArray['pages']))
			<td data-label="Subpages" class="td--series_subpages">
			@foreach ($seriesArray['pages'] as $page)
					<p><strong><a href="/o__o/{{ $seriesArray['slug'] }}/{{ $page['slug'] }}/">{{ $page['title'] }}</a></strong></p>
			@endforeach
			</td>
		@else
			<td data-label="Subpages" class="td--series_subpages td--empty"></td>
		@endif
			<td data-label="Description" class="td--project_description{{ $seriesArray['description'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['description'] !!}</td>
			{{-- <td data-label="Medium" class="td--project_medium">{{ $seriesArray['medium'] }}</td> --}}
			<td data-label="Date" class="td--project_date no_break{{ $seriesArray['nice_date'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['nice_date'] !!}</td>
			{{-- <td data-label="Size" class="td--project_dimensions no_break">{{ $seriesArray['height'] }} × {{ $seriesArray['width'] }} {{ $seriesArray['units'] }}</td> --}}
			{{-- <td data-label="Location" class="td--project_location">{{ $seriesArray['location'] }}</td> --}}
			<td data-label="Status" class="td--project_status{{ $seriesArray['status'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['status'] !!}</td>
			<td data-label="Notes" class="td--series_notes{{ $seriesArray['notes'] == '' ? ' td--empty' : '' }}">{!! $seriesArray['notes'] !!}
			</td>
			{{-- <td data-label="To Dos" class="td--project_to_dos">{!! $seriesArray['to_dos'] !!}</td> --}}
			{{-- <td data-label="Hidden" class="td--project_hidden">{!! $seriesArray['hidden'] !!}</td> --}}
		</tr>
	</tbody>
</table>
