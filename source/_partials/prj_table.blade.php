<table class="table--prj_info">
	<thead>
		<tr>
			<th class="td--prj_id">ID</th>
			<th class="td--prj_title">Title</th>
			{{-- <th class="td--prj_subtitle">Subtitle</th> --}}
			{{-- <th class="td--prj_slug">Slug</th> --}}
			<th class="td--prj_medium">Medium</th>
			<th class="td--prj_date">Date</th>
			<th class="td--prj_dimensions">Size <span class="no_break">(H × W)</span></th>
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
			<th class="td--prj_dimensions">Size <span class="no_break">(H × W)</span></th>
			{{-- <th class="td--prj_duration">Duration (H:M:S)</th> --}}
			<th class="td--prj_location">Location</th>
			<th class="td--prj_status">Status</th>
			{{-- <th class="td--prj_description">Description</th> --}}
			<th class="td--prj_notes">Notes</th>
		</tr>
	</tfoot>
	<tbody>
		@foreach ($tableArray as $item)
		<tr>
			<td class="td--prj_id">{{ $item->id }}</td>
			<td class="td--prj_title"><a href="{{ $item->slug }}"><cite>{{ $item->title }}</cite></a></td>
			<td class="td--prj_medium">{{ $item->medium }}</td>
			<td class="td--prj_date">{{ $item->nice_date }}</td>
			<td class="td--prj_dimensions">{{ $item->height }} × {{ $item->width }} {{ $item->units }}</td>
			<td class="td--prj_location">{{ $item->location }}</td>
			<td class="td--prj_status">{{ $item->status }}</td>
			<td class="td--prj_notes">{{ $item->notes }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
