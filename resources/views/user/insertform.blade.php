

@extends('layouts.app')

@section('content')
	
	<div class="container" >
		<h3>Profile</h3>
		<div class="jumbotron">
<table>
	<tr>
		<td>firstname</td>
		<td>lname</td>
		<td>mobile</td>
		<td>avtion</td>
		
	</tr>@foreach($users as $value)
	<tr>
		<td>{{$value->name}}</td>
		<td>{{$value->email}}</td>
		<td>{{$value->password}}</td>
		<td>{{$value->id}}</td>

	</tr>
	@endforeach
</table>
	</div>
	</div>

@endsection