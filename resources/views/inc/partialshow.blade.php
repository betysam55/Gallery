	<link href="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.css" rel="stylesheet">
	{!!Form::open(['action'=>['PhotoController@destroy','$photo->id'], 'methoid'=>'post'])!!}
	{{Form::hidden('_method','DELETE')}}
	{{Form::submit('Delete Photo',['class'=>'button alert'])}}
	{!!Form::close()!!}
    <link href="../assets/foundation/foundation.min.css" rel="stylesheet">
<script src="{{ asset('foundation/foundation.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.4/foundation.min.js"></script>