<link href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css" rel="stylesheet">
    <link href="{{ asset('css/foundation.min.css') }}" rel="stylesheet">
	 @include('inc.messages')
{!!Form::open(['action'=>'AlbumController@store','method'=>'post','enctype'=>'multipart/form-data'])!!}
	{{Form::text('name','',['placeholder'=>'Album Name'])}}<br>
	{{Form::textarea('description','',['placeholder'=>'Album description'])}}
	{{Form::file('cover_image')}}
	{{Form::submit('submit',['class'=>'button primary'])}}
	{!!Form::close()!!}

<script src="{{ asset('css/foundation.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>

	


