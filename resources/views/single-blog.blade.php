@extends('template')



@section('content')
    <div class="single-post">
    <p><img src="{{ Storage::url($blog_post->img) }}" alt=""></p>
    </div>
    <h1>{{$blog_post->title}}</h1>
    <p>{{$blog_post->created_at}}</p>
    <h4><i>{{$blog_post->author}}</i></h4>

    <div class="body-single">
         {{$blog_post->body}}
    </div>

    <div class="random-blog-container">
            @foreach ($random_blogs as $item)
                <div class="blog-post-small">
                    <h4>{{$item->title}}</h4>
                    <img src="{{ Storage::url($item->img) }}" alt="">
                    <div></div>
                    <span>{{$item->created_at}}</span>
                    <p>{{$item->excerpt}}</p>
                </div>
            @endforeach

    </div>
    <a href="/test/blog/all" class="all-blog-posts">Visi ieraksti</a>

@endsection
