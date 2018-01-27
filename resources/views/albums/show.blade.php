@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <br>
                	@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!</div>

                <div class="panel-body">
                    
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
                </div>
            </div>
        </div>
    </div>
</div>

	
@endsection 