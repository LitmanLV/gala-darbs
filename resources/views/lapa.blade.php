<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cat page</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
        @include('partials.header')
<!--<div class="header">
    <div class="logo"><img src="https://d17fnq9dkz9hgj.cloudfront.net/uploads/2012/11/152964589-welcome-home-new-cat-632x475.jpg" alt="FUR BEBE"></div>
<div class="contacts">
    <div><a href="mailto:cats@cats.lv" style="text-decoration: none; color: black">cats@cats.lv</a> </div>
    <div>+371 22222222</div>
</div>
</div>
        <div class="flex-container">
                <div><a href="#Footer" class="button">Par mums</a></div>
                <div><a href="#Footer3" class="button">Kaķi</a></div>
                <div><a href="#Footer4" class="button">Morning Train</a></div>
                <div><a href="#Footer2" class="button">Kontakti</a></div>
        </div>-->
        <div class="Sleepy"> <img src="/img/catinbed21.jpg" alt="Sleepy"></div>

        <div class="container">
                @yield('content')
                <div class="Look">Look</div>
                <div class="at">at</div>
                <div class="them">them</div>
                <div class="furbabies">furbabies, </div>
                <div class="yay">yay!</div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d962766.892910744!2d-81.1347346828577!3d19.50688704994227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f25863e2fb8aa29%3A0x7045c4d38770715e!2sCayman+Islands!5e0!3m2!1sen!2slv!4v1565041365489!5m2!1sen!2slv" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       <!--<div class="footer">
        <div id="Footer3"><strong>Lekcijas kaķismā</strong>
            <ul>
                <li><a href="https://www.catsthemusical.com/" target="_blank">Lekcijas</a></li>
                <li><a href="https://catcamp.co/" target="_blank">Nometnes</a></li>
                <li><a href="https://www.youtube.com/watch?v=_bFPdr5xmII" target="_blank">Kaķu pārtijs</a></li>
                <li><a href="https://www.iizcat.com/post/4168/Cat-walks-into-university-lecture-and-does-the-most-relatable-thing-ever" target="_blank">Lasi lekciju!</a></li>
            </ul>
        </div>
        <div id="Footer4"><strong>Praktiskās nodarbības</strong>
                <ul>
                        <li>Nodarbības</li>
                        <li>Brīvprātīgais darbs</li>
                        <li>Kaķu pārtijs</li>
                        <li>Māci meistarklasi!</li>
                    </ul>
        </div>
        <div id="Footer"><strong>Seko mums</strong>
                <ul>
                        <li><a href="https://www.facebook.com/groups/1902594796674596/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/cats_of_instagram/?hl=en" target="_blank">Istagram</a></li>
                        <li><a href="https://www.askideas.com/media/45/Costume-Party-At-The-Crazy-Cat-Ladys-House-Funny-Party-Meme-Image.jpg" target="_blank">Kaķu tantēm</a></li>
                    </ul>
        </div>
        <div id="Footer2"><strong>Kontakti</strong>
                <ul>
                        <li>George Town, Cayman Islands</li>
                        <li>+371 22222222</li>
                        <li>cats@cats.lv</li>
                    </ul>


        </div>-->

        @include('partials.footer')
    </div>
    </body>
</html>
