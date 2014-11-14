@extends('layouts.master')
@section('content')

<h1>Show All Albums</h1>
<a class="btn btn-primary btn-lg" href="{{route('products.create')}}" class="">New Album</a>


<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Cover</th>
          <th>Upload</th>
          <th>Title</th>
          <th>Description</th>
          <th>Controller</th>
        </tr>
      </thead>
      <tbody>
@foreach($products as $product)

      <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->catalog}}<a href="{{route('products.show', $product->id)}}"><img src="{{asset('uploads/albums/' . $product->id . '/' . $product->img)}}" class="thumbnail" width="100"> </a></td>
            
          <td>
@include('include.form')
</td>
          <td><a href="{{route('products.show', $product->id)}}">{{$product->name}}</a></td>
          <td>{{$product->description}}</td>
          <td>
 
	<a href="{{route('products.edit', $product->id)}}" class="btn btn-default btn-sm btn-block">Edit</a> 
	{{Form::open(['method'=>'DELETE', 'route'=>['products.destroy', $product->id]])}}
	{{Form::hidden('id', $product->id)}}
	<button type="submit" class="btn btn-default btn-sm btn-block">Delete</button>
	{{Form::close()}}

          </td>
        </tr>

@endforeach

 </tbody>
    </table>





@stop


  

     