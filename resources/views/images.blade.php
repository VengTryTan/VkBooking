<table>	
	<tr>
		@foreach($photos as $image)

		<td>
		{{$image->name}}
		</td>
		<td>
			<img class="media-object" src="storage/{{ $image->picture }}" width="250" height="150">
			@foreach(json_decode($image->images) as $i)
			<img class="media-object" src="storage/{{ $i }}" width="250" height="150">
			@endforeach
		</td>
		@endforeach
		
	</tr>
</table>
