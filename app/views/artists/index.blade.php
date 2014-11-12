@extends('layouts.master')
@section('content')

<h1>Show All Artists</h1>
<a href="{{route('artists.create')}}" class="btn btn-primary btn-lg">New artist</a>
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Artist Name</th>
          <th>Description</th>
          <th>Controls</th>
        </tr>
      </thead>
      <tbody>
@foreach($artists as $artist)
        <tr>
          <td>{{$artist->id}}</td>
          <td><a href="{{route('artists.show', $artist->id)}}">{{$artist->name}}</a> </td>
          <td>{{$artist->id}}</td>
          <td>
    <a href="{{route('artists.edit', $artist->id)}}" class="btn btn-default btn-sm btn-block">Edit</a> 
	{{Form::open(['method'=>'DELETE', 'route'=>['artists.destroy', $artist->id]])}}
	{{Form::hidden('id', $artist->id)}}
	<button class="btn btn-default btn-sm btn-block" type="submit">Delte</button>
	{{Form::close()}}
          </td>
        </tr>

@endforeach

      </tbody>
    </table>



@stop




