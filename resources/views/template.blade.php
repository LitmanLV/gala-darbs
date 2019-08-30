{{-- template.blade.php --}}
<html>
    <head>
        <title>Page Name</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        @include('partials.header')

        <img src="/img/img.jpg" alt="cats">

        <div class="container">
            @yield('content')
        </div>

        <div class="sidebar">
            @yield('sidebar')
        </div>

        @include('partials.footer')

        <script src="/js/app.js"></script>

    </body>
</html>
