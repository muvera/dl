@extends('layouts.master')
@section('content')

<h1>Edit genre</h1>
{{Form::model($genre,['method'=>'PATCH', 'route'=>['genres.update', $genre->id]])}}
		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- description -->
<div class="form-group">
		{{ Form::label('description', 'Description:') }}
		{{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>
	
{{Form::submit()}}
{{Form::close()}}

@stop