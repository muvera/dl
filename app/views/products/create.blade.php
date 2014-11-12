@extends('layouts.master')
@section('content')

<h1>New Album</h1>
{{Form::open(['route'=>'products.store'])}}
		<!-- name -->
<div class=name"form-group">
		{{ Form::label('name', 'Album Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>
<!-- dropdown list -->
{{ Form::label('artist_id', 'Artist:') }}
<select class="form-control" name="artist_id">
@foreach($artists as $artist)
<option name="artist" value="{{$artist->id}}" type="text" >{{$artist->name}} - {{$artist->alias}}</option>
@endforeach
</select>
<!-- add new artist button -->
<a href="/artists/create" class="btn btn-default btn-sm" type="button">Add New Artist</a>
<br>
<!-- dropdown list -->
{{ Form::label('genre_id', 'Genres:') }}
<select class="form-control" name="genre_id">
@foreach($genres as $genre)
<option name="artist" value="{{$genre->id}}" type="text" >{{$genre->name}} - {{$genre->description}}</option>
@endforeach
</select>
<!-- add new artist button -->
<a href="/genres/create" class="btn btn-default btn-sm" type="button">Add New Genre</a>

<br>
<!-- dropdown list -->
{{ Form::label('cat_id', 'Show Case:') }}
<select class="form-control" name="cat_id">
@foreach($categories as $category)
<option name="artist" value="{{$category->id}}" type="text" >{{$category->name}} - {{$category->description}}</option>
@endforeach
</select>
<!-- add new artist button -->
<a href="/genres/create" class="btn btn-default btn-sm" type="button">Add New Show Case</a>



		<!-- description -->
<div class="form-group">
		{{ Form::label('description', 'Description:') }}
		{{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>

		<!-- catalog -->
<div class="form-group">
		{{ Form::label('catalog', 'Catalog Number:') }}
		{{ Form::text('catalog', null, ['class'=>'form-control']) }}
</div>

		<!-- barcode -->
<div class="form-group">
		{{ Form::label('barcode', 'Barcode Number:') }}
		{{ Form::text('barcode', null, ['class'=>'form-control']) }}
</div>



<button class="btn btn-success btn-lg" type="submit">Submit</button>
{{Form::close()}}	

@stop

