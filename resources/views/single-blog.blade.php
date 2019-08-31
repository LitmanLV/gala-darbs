@extends('template')



@section('content')

    <h1>{{$blog_post->title}}</h1>
    <h4> {{$blog_post->author}}</h4>

    <span>{{$blog_post->created_at->diffForHumans()}}</span>

    <img src="{{$blog_post->img}}" alt="">

    <div class="body">
            {{$blog_post->body}}
        </div>
    </div>

@endsection
