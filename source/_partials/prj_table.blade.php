<table id="table--prj_info" class="table--prj_info table--image_slider">
	<thead>
		<tr>
			<th class="td--prj_id">ID</th>
			<th class="td--prj_title">Title</th>
			{{-- <th class="td--prj_subtitle">Subtitle</th> --}}
			<th class="td--prj_by">By</th>
			{{-- <th class="td--prj_slug">Slug</th> --}}
			<th class="td--prj_medium">Medium</th>
			<th class="td--prj_date">Date</th>
			<th class="td--prj_dimensions">Size <span class="no_break">(h × w)</span></th>
			{{-- <th class="td--prj_duration">Duration (H:M:S)</th> --}}
			<th class="td--prj_location">Location</th>
			<th class="td--prj_status">Status</th>
			{{-- <th class="td--prj_description">Description</th> --}}
			<th class="td--prj_notes">Notes</th>
			<th class="td--prj_rating">Rating</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th class="td--prj_id">ID</th>
			<th class="td--prj_title">Title</th>
			{{-- <th class="td--prj_subtitle">Subtitle</th> --}}
			<th class="td--prj_by">By</th>
			{{-- <th class="td--prj_slug">Slug</th> --}}
			<th class="td--prj_medium">Medium</th>
			<th class="td--prj_date">Date</th>
			<th class="td--prj_dimensions">Size <span class="no_break">(h × w)</span></th>
			{{-- <th class="td--prj_duration">Duration (H:M:S)</th> --}}
			<th class="td--prj_location">Location</th>
			<th class="td--prj_status">Status</th>
			{{-- <th class="td--prj_description">Description</th> --}}
			<th class="td--prj_notes">Notes</th>
			<th class="td--prj_rating">Rating</th>
		</tr>
	</tfoot>
	<tbody>
		@foreach ($tableArray as $item)
		<tr class="imageload images" data-img="{{ $item->imgfile }}" data-img-w="{{ $item->small_width_px }}" data-img-h="{{ $item->small_height_px }}">
			<td data-label="ID" class="td--prj_id{{ $item->id == '' ? ' td--empty' : '' }}">{{ $item->id }}</td>
			<td data-label="Title" class="td--prj_title"><a href="{{ $item->slug }}/">{!! $item->title != '' ? '<cite>'.$item->title.'</cite>' : 'Untitled' !!}{!! $item->subtitle != '' ? ' ('.$item->subtitle.')' : '' !!}</a></td>
			<td data-label="By" class="td--prj_by{{ $item->person == '' ? ' td--empty' : '' }}">{{ $item->person }}</td>
			<td data-label="Medium" class="td--prj_medium{{ $item->medium == '' ? ' td--empty' : '' }}">{{ $item->medium }}</td>
			<td data-label="Date" class="td--prj_date{{ $item->nice_date == '' ? ' td--empty' : '' }}">{{ $item->nice_date }}</td>
			<td data-label="Size" class="td--prj_dimensions{{ $item->width == '' && $item->height == '' && $item->units == '' ? ' td--empty' : '' }}">{{ $item->height }} {{ $item->width == NULL ? '' : '×' }} {{ $item->width }} {{ $item->units }}</td>
			<td data-label="Location" class="td--prj_location{{ $item->location == '' ? ' td--empty' : '' }}">{{ $item->location }}</td>
			<td data-label="Status" class="td--prj_status{{ $item->status == '' ? ' td--empty' : '' }}">{{ $item->status }}</td>
			<td data-label="Notes" class="td--prj_notes{{ $item->notes == '' ? ' td--empty' : '' }}">{!! $item->notes !!}</td>
			<td data-label="Rating" class="td--prj_rating{{ $item->jk_rating == '' ? ' td--empty' : '' }}">
				<span class="stars"><!-- get rid of space
					@for ($i = 0; $i < 5; $i++)
						@if ($item->jk_rating > $i)
							@if ($item->jk_rating - $i == .5)
					-->☆<!-- get rid of space
							@else
					-->★<!-- get rid of space
							@endif
						@endif
					@endfor
			--></span>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
