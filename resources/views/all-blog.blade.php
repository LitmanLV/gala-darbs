@extends('template')



@section('content')

<div class="blog-post-small-big" onclick="window.location='/test/blog/{{$lastitem->slug}}';">
        <h2><b>Karsts jaunums: {{$lastitem->title}}</b></h2>
        <img src="{{ Storage::url($lastitem->img) }}" alt="">
    </div>

<h2></h2>

<div class="blog-container">
@foreach ($myblogs as $item)
    <div class="blog-post-small" onclick="window.location='/test/blog/{{$item->slug}}';">
        <h4>{{$item->title}}</h4>
        <img src="{{ Storage::url($item->img) }}" alt="">
        <div></div>
        <span>{{$item->created_at}}</span>
        <p>{{$item->excerpt}}</p>
    </div>
@endforeach

@endsection
