@extends('layouts.app1')

@section('content')
	<h3>{{$photo->title}}</h3>
	<p>{{$photo->description}}</p>
	<a href="/albums/{{$photo->album_id}}" class="button secondary">Back To Gallery</a>
	<hr>
	<img src="/storage/photo/{{$photo->album_id}}/{{$photo->photos}}" alt="{{$photo->title}}">
	<br><br>
	{!!Form::open(['action'=>['PhotoController@destroy','$photo->id'], 'methoid'=>'post'])!!}
	{{Form::hidden('_method','DELETE')}}
	{{Form::submit('Delete Photo',['class'=>'button alert'])}}
	{!!Form::close()!!}
	<hr>
	<small>Size:{{$photo->size}}</small>
@endsection


