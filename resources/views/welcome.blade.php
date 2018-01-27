@extends('layouts.app')

@section('content')
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
                <img class="thumbnail" src="/storage/album_covers/{{$albums->cover_image}}" alt="{{$albums->name}}">
                </a>
                <br>
                <h4>{{$albums->name}}</h4>
                @else
                <div class="midium-4 columns end">
                <a href="/albums/{{$albums->id}}">
                    <img class="thumbnail" src="/storage/album_covers/{{$albums->cover_image}}" alt="{{$albums->name}}">
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