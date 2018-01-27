@extends('layouts.app')

@section('content')
@if(Auth::user()->id)
<div class="container">
<div class="jumbotron">
	<h2>{{$album->name}}</h2>
	<div class="responsive">
	<div class="gallery">
	    <a target="" href="">
	      <img width="200" height="200" class="img-thumbnail" src="/storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
	    </a>
	    <div class="desc"><h5>Album Cover Image</h5>
	 	<div class="desc">{{$album->description}}</div>
</div>
	 	
	  </div>
	</div>
	<hr>

	<br>
	<h3>Available photos</h3>


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
	 			<div class="desc" ><a target="_blank" href="/storage/photo/{{$photos->album_id}}/{{$photos->photos}}" class="button primary">Download</a></div>
				
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
	 			<div class="desc" ><a target="_blank" href="/storage/photo/{{$photos->album_id}}/{{$photos->photos}}" class="button primary">Download</a></div>
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
	
	 @else
	 
     <div id="album">
        <div class="row text-center">
            
            <div class="midium-4 columns end">
                <a href="={{$album->id}}">
                    <img class="thumbnail" src="storage/album_covers/{{$album->created_by}}/{{$album->cover_image}}" alt="{{$album->name}}">
                </a>
                <br>
                <h4>{{$album->name}}</h4>
                

	 <a href="/login" >must login/register to download</a>
	 @endif
@endsection 