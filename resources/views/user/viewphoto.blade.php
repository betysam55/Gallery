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
                   
<h2>{{$album->name}}</h2>
	<div class="responsive">
	<div class="gallery">
	    <a target="_blank" href="">
	      <img width="200" height="200" class="img-thumbnail" src="/storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
	    </a>
	    <div class="desc"><h5>Album Cover Image</h5>
	 	<div class="desc">{{$album->description}}</div>
	 	<div class="desc" ><a href="/albums/usercreate/create/{{$album->id}}" class="btn btn-primary">Upload Photo</a></div>
	  </div></div>
	</div>
	<hr>
	<br>
	<br>
	<h3>Available Photos</h3>


	@if(count($photos)>0)
	<?php 
		$colcount=count($photos);
		$i=1;
	 ?>
	 <div id="photo">
	 	<div class="container">
	 		@foreach($photos as $photos)
	 		@if($i==$colcount)
	 		<div class="col-md-4  col-lg-4 col-sm-6 col-xs-12">
	 			<div class="responsive">
	 				<div class="gallery">
	 			<a href="/photos/{{$photos->id}}">
	 				<img  width="600" height="400" class="img-thumbnail" src="/storage/photo/{{$photos->album_id}}/{{$photos->photos}}" alt="{{$photos->title}}">
	 			</a>
	 			<div class="desc">{{$photos->title}}</div>
	 			<div class="desc" ><a href="{{route('login')}}" class="button primary">Download</a></div>
				
	 			</div>
	 			</div>
	 			@else
	 			<div class="col-md-4  col-lg-4 col-sm-6 col-xs-12">
	 			<div class="responsive">
	 				<div class="gallery">
	 			<a href="/photos/{{$photos->id}}">
	 				<img  width="600" height="400" class="img-thumbnail" src="/storage/photo/{{$photos->album_id}}/{{$photos->photos}}" alt="{{$photos->title}}">
	 			</a>
	 			
	 			<div class="desc">{{$photos->title}}</div>
	 			<div class="desc" ><a href="{{route('login')}}" class="button primary">Download</a></div>
	 			</div>
	 			</div>
	 			@endif
	 			@if($i%3==0)
	 			</div>
	 		</div>
	 			@else
	 				</div>
	 			@endif
	 			<?php $i++ ?>
	 			@endforeach
	 		</div>
	 </div>
	 @else
	 <P>No Photo to display</P>
	 @endif

	 </div></div>
</div></div>
                </div>
            </div>
        
</div>

@endsection 