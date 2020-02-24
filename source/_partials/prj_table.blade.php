<table id="table--prj_info" class="table--prj_info">
	<thead>
		<tr>
			<th class="td--prj_id">ID</th>
			<th class="td--prj_title">Title</th>
			{{-- <th class="td--prj_subtitle">Subtitle</th> --}}
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
		<tr class="imageload images" data-img="{{ $item->imgfile }}" data-img-w="{{ $item->percenthalfwidthpx }}" data-img-h="{{ $item->percenthalfheightpx }}">
			<td class="td--prj_id{{ $item->id == '' ? ' td--empty' : '' }}">{{ $item->id }}</td>
			<td class="td--prj_title{{ $item->title == '' ? ' td--empty' : '' }}"><a href="{{ $item->slug }}">{!! $item->title != '' ? '<cite>'.$item->title.'</cite>' : 'Untitled' !!}</a></td>
			<td class="td--prj_medium{{ $item->medium == '' ? ' td--empty' : '' }}">{{ $item->medium }}</td>
			<td class="td--prj_date{{ $item->nice_date == '' ? ' td--empty' : '' }}">{{ $item->nice_date }}</td>
			<td class="td--prj_dimensions{{ $item->width == '' ? ' td--empty' : '' }}">{{ $item->height }} {{ $item->width == NULL ? '' : '×' }} {{ $item->width }} {{ $item->units }}</td>
			<td class="td--prj_location{{ $item->location == '' ? ' td--empty' : '' }}">{{ $item->location }}</td>
			<td class="td--prj_status{{ $item->status == '' ? ' td--empty' : '' }}">{{ $item->status }}</td>
			<td class="td--prj_notes{{ $item->notes == '' ? ' td--empty' : '' }}">{{ $item->notes }}</td>
			<td class="td--prj_rating{{ $item->jk_rating == '' ? ' td--empty' : '' }}">
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
