@extends('layouts.master')
@section('content')

<h1>Edit Product</h1>
{{Form::model($product,['method'=>'PATCH', 'route'=>['products.update', $product->id]])}}
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