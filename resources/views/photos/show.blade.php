
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Photos<br>
                 @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! {{Auth::user()->name}}</div>

                <div class="panel-body">
                   <!-- <h3>{{$photo->title}}</h3>
			<p>{{$photo->description}}</p>
			<div> -->
            <div class="container">
                <a href="">@include('inc.partialshow')</a>
                <a href="../albums/usercreate/{{$photo->album_id}}" class="btn btn-secondary">Back To Gallery</a>
                <a href="/storage/photo/{{$photo->album_id}}/{{$photo->photos}}" target="_blank"><button class="btn btn-primary">Download</button></a>
                <small>Size:{{$photo->size}}kb</small> <br><br>
                <img width="600" height="400" class="img-thumbnail" src="/storage/photo/{{$photo->album_id}}/{{$photo->photos}}" alt="{{$photo->title}}">
            <br>
            </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
		


	
@endsection



