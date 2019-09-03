{{-- blog.blade.php --}}
@extends('template')



@section('content')
<div class="Sleepy"> <img src="/img/catinbed21.jpg" alt="Sleepy" width="100%"></div>


    <h1><b>Jaunākie kaķposti</b></h1>


    <div class="my-slider">
        @foreach ($myblogs as $item)
        <div onclick="window.location='/test/blog/{{$item->slug}}';" class="blog-post-card">
                <h4>{{$item->title}}</h4>
                <img src="{{ Storage::url($item->img) }}" alt="">
                <div></div>
                <span>{{$item->created_at}}</span>
                <p>{{$item->excerpt}}</p>
        </div>
        @endforeach
    </div>
    <a href="/test/blog/all" class="all-blog-posts-button">Visi ieraksti</a>

    <script type="module">
            tns({
              container: '.my-slider',
              items: 3,
              slideBy: 'page',
              controlsText: ['&#8592;', '&#8594;'],
              autoplay: true,
              autoplayButtonOutput: false,
              nav: false,
              controlsPosition:'none'
            });
    </script>

<div style="background-color: #fff;">
    <img src="https://media1.giphy.com/media/kWqTfdz5RJBRe/source.gif" alt="dancing" class="gif-center">
</div>

<div class="blog-container-special">
        @foreach ($randomBlogs as $item)
            <div class="blog-post-small" onclick="window.location='/test/blog/{{$item->slug}}';">
                <h4>{{$item->title}}</h4>
                <img src="{{ Storage::url($item->img) }}" alt="">
                <div></div>
                <span>{{$item->created_at}}</span>
                <p>{{$item->excerpt}}</p>
            </div>
        @endforeach
    @endsection
