@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

    @if(count($albums)>0)
    <?php 
        $colcount=count($albums);
        $i=1;
     ?>
     <div id="albums">
        <div class="row text-center">
            @foreach($albums as $albums)
            @if($i==$colcount)
            <div class="midium-4 columns end">
                <a href="/albums/{{$albums->id}}">
                    <img class="thumbnail" src="storage/album_covers/{{$albums->cover_image}}" alt="{{$albums->name}}">
                </a>
                <br>
                <h4>{{$albums->name}}</h4>
                @else
                <div class="midium-4 columns end">
                <a href="/albums/{{$albums->id}}">
                    <img class="thumbnail" src="storage/album_covers/{{$albums->cover_image}}" alt="{{$albums->name}}">
                </a>
                <br>
                <h4>{{$albums->name}}</h4>
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
@endsection