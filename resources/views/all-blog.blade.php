@extends('template')



@section('content')

<h1>Visi mani lieliskie bloga ieraksti ir šeit</h1>

<div class="blog-container">
@foreach ($myblogs as $item)
    <div class="card">
        <h4>{{$item->title}}</h4>
        <img src="{{$item->img}}" alt="">
        <p>{{$item->body}}</p>
    <span>{{$item->created_at}}</span>
    </div>
</div>
@endforeach

@endsection
