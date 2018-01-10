@extends('layouts.app')

@section('content')
	@if(count($albums)>0)
	<?php 
		$colcount=count($albums);
		$i=1;
	 ?>
	 <div id="albums" class="container">
	 	<div class="row">
	 		@foreach($albums as $albums)
	 		@if($i==$colcount)
	 		<div class="col-md-4  col-lg-4 col-sm-6 col-xs-12">
	 			<div class="responsive">
	 				<div class="gallery">
	 			<a href="/albums/{{$albums->id}}" data-toggle="tooltip" title="Hooray!">
	 				<img width="600" height="400" class="img-thumbnail" src="storage/album_covers/{{$albums->cover_image}}" alt="{{$albums->name}}">
	 			</a>
	 			<br>
	 			<div class="desc">{{$albums->name}}</div>
	 			<div class="desc">{{$albums->description}}</div>
	 			</div>
	 			</div>
	 			@else
	 			<div class="col-md-4  col-lg-4 col-sm-6 col-xs-12">
	 				<div class="responsive">
	 					<div class="gallery">
	 			<a href="/albums/{{$albums->id}}">
	 				<img width="600" height="400" class="img-thumbnail" src="storage/album_covers/{{$albums->cover_image}}" alt="{{$albums->name}}">
	 			</a>
	 			<br>
	 			<div class="desc">{{$albums->name}}</div>
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

	 <style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection





