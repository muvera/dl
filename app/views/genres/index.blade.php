@extends('layouts.master')
@section('content')

<h1>Show All Genres</h1>
<a href="{{route('genres.create')}}" class="btn btn-primary btn-lg">New Genre</a>
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Genre Name</th>
          <th>Description</th>
          <th>Controls</th>
        </tr>
      </thead>
      <tbody>
@foreach($genres as $genre)
        <tr>
          <td>{{$genre->id}}</td>
          <td><a href="{{route('genres.show', $genre->id)}}">{{$genre->name}}</a> </td>
          <td>{{$genre->id}}</td>
          <td>
    <a href="{{route('genres.edit', $genre->id)}}" class="btn btn-default btn-sm btn-block">Edit</a> 
	{{Form::open(['method'=>'DELETE', 'route'=>['genres.destroy', $genre->id]])}}
	{{Form::hidden('id', $genre->id)}}
	<button class="btn btn-default btn-sm btn-block" type="submit">Delte</button>
	{{Form::close()}}
          </td>
        </tr>

@endforeach

      </tbody>
    </table>



@stop




