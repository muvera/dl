
{{Form::open(['route'=>'upload', 'files'=> true])}}
		{{ Form::file('image')}}
		{{ Form::hidden('album_id', $product->id)}}
		{{ Form::submit('Submit')}}
{{Form::close()}}		