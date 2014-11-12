@extends('layouts.master')
@section('content')

<h1>Edit Artist</h1>
{{Form::model($artist,['method'=>'PATCH', 'route'=>['artists.update', $artist->id]])}}
		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- description -->
<div class="form-group">
		{{ Form::label('alias', 'Alias:') }}
		{{ Form::textarea('alias', null, ['class'=>'form-control']) }}
</div>
	
{{Form::submit()}}
{{Form::close()}}

@stop