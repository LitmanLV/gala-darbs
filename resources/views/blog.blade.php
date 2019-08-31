{{-- blog.blade.php --}}
@extends('template')



@section('content')
<div class="Sleepy"> <img src="/img/catinbed21.jpg" alt="Sleepy"></div>


    <h1>Šis ir mans blogs</h1>

    <div class="blog-container">
    @foreach ($myblogs as $item)
        <div class="card">
            <h4>{{$item->title}}</h4>
            <img src="{{$item->img}}" alt="">
            <p>{{$item->body}}</p>
        <span>{{$item->created_at->diffForHumans()}}</span>
        </div>
    </div>
    @endforeach

@endsection


