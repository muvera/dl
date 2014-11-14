@extends('layouts.master')
@section('content')

<h1>Create New Artist</h1>
{{Form::open(['route'=>'artists.store'])}}

		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- Description -->
<div class="form-group">
		{{ Form::label('alias', 'Alias:') }}
		{{ Form::text('alias', null, ['class'=>'form-control']) }}
</div>


{{Form::submit()}}
{{Form::close()}}

@stop
