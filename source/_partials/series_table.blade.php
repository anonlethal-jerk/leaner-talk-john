<table class="table--series_info">
	<thead>
		<tr>
			<th class="td--prj_id">ID</th>
			<th class="td--prj_title">Title</th>
			{{-- <th class="td--prj_subtitle">Subtitle</th> --}}
			{{-- <th class="td--prj_slug">Slug</th> --}}
			<th class="td--prj_medium">Medium</th>
			<th class="td--prj_date">Date</th>
			{{-- <th class="td--prj_dimensions">Dimensions <span class="no_break">(H × W)</span></th> --}}
			{{-- <th class="td--prj_duration">Duration (H:M:S)</th> --}}
			<th class="td--prj_location">Location</th>
			<th class="td--prj_status">Status</th>
			{{-- <th class="td--prj_description">Description</th> --}}
			<th class="td--prj_notes">Notes</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th class="td--prj_id">ID</th>
			<th class="td--prj_title">Title</th>
			{{-- <th class="td--prj_subtitle">Subtitle</th> --}}
			{{-- <th class="td--prj_slug">Slug</th> --}}
			<th class="td--prj_medium">Medium</th>
			<th class="td--prj_date">Date</th>
			{{-- <th class="td--prj_dimensions">Dimensions <span class="no_break">(H × W)</span></th> --}}
			{{-- <th class="td--prj_duration">Duration (H:M:S)</th> --}}
			<th class="td--prj_location">Location</th>
			<th class="td--prj_status">Status</th>
			{{-- <th class="td--prj_description">Description</th> --}}
			<th class="td--prj_notes">Notes</th>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<td class="td--prj_id">{{ $seriesArray['id'] }}</td>
			<td class="td--prj_title"><a href="{{ $seriesArray['slug'] }}"><cite>{{ $seriesArray['title'] }}</cite></a></td>
			<td class="td--prj_medium">{{ $seriesArray['medium'] }}</td>
			<td class="td--prj_date no_break">{{ $seriesArray['nice_date'] }}</td>
			{{-- <td class="td--prj_dimensions no_break">{{ $seriesArray['height'] }} × {{ $seriesArray['width'] }} {{ $seriesArray['units'] }}</td> --}}
			<td class="td--prj_location">{{ $seriesArray['location'] }}</td>
			<td class="td--prj_status">{{ $seriesArray['status'] }}</td>
			<td class="td--prj_notes">{{ $seriesArray['notes'] }}</td>
		</tr>
	</tbody>
</table>
