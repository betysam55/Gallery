@extends('layouts.app')

@section('content')
	
	<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard/Album/Create<br>
                	@if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in! {{Auth::user()->name}}</div>

                <div class="panel-body">
                    
                    
		<h3>Create New Album</h3>
		<div class="jumbotron">
	 @include('inc._partials')

	</div>
	
                </div>
            </div>
        </div>
    </div>
</div>
	

@endsection

	


