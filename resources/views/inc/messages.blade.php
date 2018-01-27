@if(count($errors)>0)
	@foreach($errors->all() as $error)
		<div class="callout alert">
			{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	
		<div class="alert">
			{{session('success')}}
		</div>
	
@endif

@if(session('error'))
	
		<div class="callout alert">
			{{session('error')}}
		</div>
	
@endif
