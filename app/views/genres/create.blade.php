@extends('layouts.master')
@section('content')

<h1>Create New Genre</h1>
{{Form::open(['route'=>'genres.store'])}}

		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- Description -->
<div class="form-group">
		{{ Form::label('description', 'Description:') }}
		{{ Form::textarea('alias', null, ['class'=>'form-control']) }}
</div>


{{Form::submit()}}
{{Form::close()}}

@stop
