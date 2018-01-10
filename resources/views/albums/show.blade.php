@extends('layouts.app')

@section('content')
<div class="container">
<div class="jumbotron">
	<h2>{{$album->name}}</h2>
	<div class="responsive">
	<div class="gallery">
	    <a target="_blank" href="">
	      <img width="200" height="200" class="img-thumbnail" src="../storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
	    </a>
	    <div class="desc"><h5>Album Cover Image</h5></div>
	 	<div class="desc">{{$album->description}}</div>
	  </div>
	</div>
	<hr>
	<br>

	@if(count($album->photos)>0)
	<?php 
		$colcount=count($album->photos);
		$i=1;
	 ?>
	 <div id="photo">
	 	<div class="container">
	 		@foreach($album->photos as $photos)
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
@endsection 