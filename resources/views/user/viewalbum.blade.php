@extends('layouts.app')

@section('content')


@if(count($albums)>0)
	<?php 
		$colcount=count($albums);
		$i=1;
	 ?>
	 <div id="albums" class="container">
	 	<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard
                		<br><small> @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif</small>You are logged in! {{Auth::user()->name}}
                </div>

                <div class="panel-body" >
                   
                    
                    <h2>My albums</h2>
	 	<div class="row">
	 		@foreach($albums as $albums)
	 		@if($i==$colcount)
	 		<div class="col-md-4  col-lg-4 col-sm-6 col-xs-12">
	 			<div class="responsive">
	 				<div class="gallery">
	 			<a href="/user/{{$albums->id}}/myalbums/photo" data-toggle="tooltip" title="">
	 				<img width="600" height="200" class="img-thumbnail" src="/storage/album_covers/{{$albums->cover_image}}" alt="{{$albums->name}}">
	 			</a>

	 			<br>
	 			<div class="header">{{$albums->name}}
	 			<div class="desc">{{$albums->description}}</div></div>
	 
	 			</div>
	 			</div>
	 			@else
	 			<div class="col-md-4  col-lg-4 col-sm-6 col-xs-12">
	 				<div class="responsive">
	 					<div class="gallery">
	 			<a href="/user/{{$albums->id}}/myalbums/photo" data-toggle="tooltip" title="">
	 				<img width="600" height="200" class="img-thumbnail" src="/storage/album_covers/{{$albums->cover_image}}" alt="{{$albums->name}}">
	 			</a>
	 			<br>
	 			<div class="header">{{$albums->name}}
	 			<div class="desc">{{$albums->description}}</div></div>
	 	
	 			</div>
	 			</div>
	 			@endif
	 			@if($i%3==0)
	 			</div>
	 		</div><div class="row text-center">
	 			@else
	 				</div>
	 			@endif
	 			<?php $i++ ?>
	 			@endforeach
	 		</div>
	 </div>
	 @else
	 <P>No Album to display</P>
	 @endif
                </div>
            </div>
        </div>
    </div>
</div>
	 	
@endsection 