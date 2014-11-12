@extends('layouts.master')
@section('content')

<h1>Show All Categories</h1>
<a href="{{route('categories.create')}}" class="btn btn-primary btn-lg">New category</a>
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Category Name</th>
          <th>Description</th>
          <th>Controls</th>
        </tr>
      </thead>
      <tbody>
@foreach($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a> </td>
          <td>{{$category->id}}</td>
          <td>
    <a href="{{route('categories.edit', $category->id)}}" class="btn btn-default btn-sm btn-block">Edit</a> 
	{{Form::open(['method'=>'DELETE', 'route'=>['categories.destroy', $category->id]])}}
	{{Form::hidden('id', $category->id)}}
	<button class="btn btn-default btn-sm btn-block" type="submit">Delte</button>
	{{Form::close()}}
          </td>
        </tr>

@endforeach

      </tbody>
    </table>



@stop




