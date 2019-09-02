{{-- template.blade.php --}}
<html>
    <head>
        <title>Cat Page </title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
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
        <hr>
        @include('partials.footer')


        <button onclick="topFunction()" id ="myBtn" class="to-top-button" title="Top">Uz augšu</button>
<script>
        window.onscroll = function() {toggleUpButton()};

        function toggleUpButton() {

            if (document.body.scrollTop >= 800 || document.documentElement.scrollTop >= 800) {
                document.getElementById("myBtn").style.display = "block";
            }
            else {
                document.getElementById("myBtn").style.display = "none";
            }
        }
        function topFunction() {
             document.body.scrollTop = 0;
             document.documentElement.scrollTop = 0;
        }
</script>

        <script src="/js/app.js"></script>
    </body>
</html>
