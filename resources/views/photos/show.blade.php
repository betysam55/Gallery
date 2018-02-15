@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <br>
                 @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!</div>

                <div class="panel-body">
                   <!-- <h3>{{$photo->title}}</h3>
			<p>{{$photo->description}}</p>
			<div> --><a href="">@include('inc.partialshow')</a><a href="/home/elyalcon/public_html/G/Gallery/storage/albums/usercreate/{{$photo->album_id}}" class="btn btn-secondary">Back To Gallery</a><a href="/storage/photo/{{$photo->album_id}}/{{$photo->photos}}" target="_blank"><button class="btn btn-primary">Download</button></a></div><small>Size:{{$photo->size}}kb</small>
			<hr>
			<img width="600" height="400" class="img-thumbnail" src="/storage/photo/{{$photo->album_id}}/{{$photo->photos}}" alt="{{$photo->title}}">
			<br>
			
			
			<hr>
                </div>
            </div>
        </div>
    </div>
</div>
		


	
@endsection



