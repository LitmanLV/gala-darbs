{{-- template.blade.php --}}
<html>
    <head>
        <title>Cat Page </title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="icon" href="/img/cat.jpg" type="image/jpg" sizes="16x16">
    </head>
    <body>
        @include('partials.header')

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
