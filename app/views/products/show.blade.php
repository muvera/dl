@extends('layouts.master')
@section('content')
<h1>{{$product->name}}</h1>
<img src="{{asset('uploads/albums/' . Session::get('album_id') . '/' . $product->img)}}" class="thumbnail">
<p>{{$product->description}}</p>


@stop