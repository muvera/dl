@extends('layouts.master')
@section('content')
<h1>{{$category->name}}</h1>
<p>{{$category->description}}</p>


<table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Cover</th>
          <th>Catalog#</th>
          <th>Album Name</th>
          <th>Alias</th>
          <th>Barcode</th>
        </tr>
      </thead>
      <tbody>

@foreach($products as $product)

        <tr>
          <td>{{$product->id}}</td>
          <td><img src="/uploads/{{$product->img}}" class="thumnail img-responsive"></td>
          <td>{{$product->catalog}}</td>
          <td>{{$product->name}}</td>
          <td>{{$product->alias}}</td>
		  <td>{{$product->barcode}}</td>
        </tr>
@endforeach

     </tbody>
    </table>

<a href="{{route('products.create')}}" type="button" class="btn btn-primary">New Album</a>
@stop



 