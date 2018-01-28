@extends('layouts.app')

@section('content')

	@if(count($albums)>0)
	<?php 
		$colcount=count($albums);
		$i=1;
	 ?>
	 
	 <div id="albums" class="container-fluid" style="margin-left: 30px; margin-right: 20px">
	 	<div class="row" >
	 		@foreach($albums as $album)
	 		@if($i==$colcount)
	 		<div class="clearfix visible-xs"></div>
	 		<div class="col-md-6  col-lg-4 col-sm-6 col-xs-12">
	 				<div class="polaroid">

	 			<div class="responsive">
	 				<div class="gallery">
	 			<a href="{{route('viewalbum',['id' =>$album->id ])}}" data-toggle="tooltip" title="">
	 				<img  class="img-thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
	 			</a>

	 			<br>
	 			<div class="header"><h3>{{$album->name}}</h3>
	 			<div class="desc">{{$album->description}}</div>
	 			<div class="text text-danger">Available Photo {{$album->photos()->count()}}</div>
	 			</div></div>
	 			</div>
	 		</div>
	 			@else
	 			<div class="clearfix visible-xs"></div>
	 			<div class="col-md-6  col-lg-4 col-sm-6 col-xs-12">
	 				<div class="polaroid">
	 				<div class="responsive">
	 					<div class="gallery">
	 			<a href="{{route('viewalbum',['id' =>$album->id ])}}" data-toggle="tooltip" title="">
	 				<img  class="img-thumbnail" src="storage/album_covers/{{$album->cover_image}}" alt="{{$album->name}}">
	 			</a>
	 			<br>
	 			<div class="header"><h3>{{$album->name}}</h3>
	 			<div class="desc">{{$album->description}}</div>
	 			<div class="text text-danger">Available Photo {{$album->photos()->count()}}</div>
	 			</div></div></div>
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
	 		@else
	 <P>No Album to display</P>
	 @endif
				<center>{{$albums->links()}}</center>
	 </div>
	 
@endsection




