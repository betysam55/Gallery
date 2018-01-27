<link href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css" rel="stylesheet">
    <link href="{{asset('css/foundation.min.css')}}" rel="stylesheet">
	 @include('inc.messages')
	{!!Form::open(['action'=>'PhotoController@store','method'=>'post','enctype'=>'multipart/form-data'])!!}
	{{Form::text('title','',['placeholder'=>'Photo Title'])}}
	{{Form::textarea('description','',['placeholder'=>'Photo description'])}}
	{{Form::hidden('album_id',$album_id)}}
	{{Form::file('photo')}}
	{{Form::submit('submit',['class'=>'button primary'])}}
	{!!Form::close()!!}

<script src="{{ asset('css/foundation.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>
