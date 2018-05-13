<!doctype html>
<html lang="en">
<head>
<!-- Meta tags -->
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS and font links-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link href=" {{asset('css/homepage.css') }}" rel="stylesheet" type="text/css">
<link href=" {{asset('css/slicknav.min.css') }}" rel="stylesheet" type="text/css">


<!-- Java Script links-->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js')}}" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>

</head>
 
</style>
<body>
     <header class="search-field">
        <div class="full-width search">
            <div class="search-form">
                <input type="text" name=" " placeholder="Search...">
                <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
        </div>
        <div class="full-width-navbar">
            <h2 class="brand">E-rent</h2>
            <ul id="menu">
                <li><a href="/" class="active"><i class="fa fa-home" style="font-size:14px"></i>Home</a></li>
                <li><a id="text" href="#"><i class="fa fa-align-left" style="font-size:14px"></i>Categories<i class="fa fa-caret-down" style="font-size:14px"></i></a>
                    <ul>
                        <li><a href="/summerhouse">Summer Cottage</a></li>
                        <li><a href="/recreationareas">Recreation areas</a></li>
                        <li><a href="/sanatoriums">Sanatoriums</a></li>
                    </ul>
                </li>
                <li><a href="/about"><i class="fa fa-group" style="font-size:14px"></i>About</a></li>
                <li><a href="/contact"><i class="fa fa-address-book" style="font-size:14px"></i>Contact Us</a></li>
                <li><a href="/register"><i class="fa fa-sign-in" style="font-size:14px"></i>Sign Up</a></li>
                <li ><a class="search-icon" style="font-size:15px"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            </ul>
            <div style="clear:both"></div>
        </div>
 </header>

    <section class="slider">
        <div id="sliderPart" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#sliderPart" data-slide-to="0" class="active"></li>
                <li data-target="#sliderPart" data-slide-to="1"></li>
                <li data-target="#sliderPart" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="{{ asset('images/slide1.jpg')}}" alt="slide1" style="width:100%;">
                    <div class="carousel-caption animated animatedFadeInUp fadeInUp">
                        <h1>WELCOME TO</h1>
                        <h1>e-rent COMMUNITY! </h1>
                        <p>(Best web-page where you can find accomodation that's suits you the best) <br></p>
                        <div class="slidebutton">
                            <a href="/about" class="btn btn-second">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('images/slide2.jpg')}}" alt="slide2" style="width:100%;">
                    <div class="carousel-caption animated animatedFadeInUp fadeInUp">
                        <h1 >WELCOME TO</h1>
                        <h1 >e-rent COMMUNITY! </h1>
                        <p>(Today i am introducing my second class for PSD)<br></p>
                        <div class="button">
                            <a href="/about" class="btn btn-second">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('images/parallax.jpg')}}" alt="slide3" style="width:100%;">
                    <div class="carousel-caption animated animatedFadeInUp fadeInUp">
                        <h1 >WELCOME TO</h1>
                        <h1>e-rent COMMUNITY! </h1>
                        <p>(Today i am introducing my second class for PSD_<br></p>
                        <div class="button">
                            <a href="/about" class="btn btn-second">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 

    <section class="ourservices">
        <div class="container text-center">
            <i class="fa fa-gg" style="font-size:40px;color:#9c5b57;"></i>
            <h3 >Benefits we offer</h3>
            <!--<p class="title-description"> Lorem ipsum dolor sit amet, consectetur earum, quaerat modi harum <br>ullam facilis omnis itaque cupiditate.</p>-->
        </div>
       <div class="container gaps">
            <div class="row">
                <div class="col-md-3 col-md-offset-1 text-center">
                    <i class="fa fa-globe"></i>
                    <h4>Diversity</h4>
                    <p>
                     You get a chance to dive into wide variety of choices to rent "dacha", sanatorium and rest zone.       
                    </p>
                </div>
                <div class="col-md-3 col-md-offset-1 text-center">
                    <i class="fa fa-check"></i>
                    <h4>Quality</h4>
                    <p>
                     Make a permanent clients for renting your "dacha" summer house, sanatorium or rest zone   
                    </p>
                </div>
                <div class="col-md-3 col-md-offset-1 text-center">
                    <i class="fa fa-hotel"></i>
                    <h4>Convenience</h4>
                    <p>
                     Find "dacha", sanatorium or rest zone as you wished, without going outside and loosing your golden time  
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-1 text-center">
                    <i class="fa fa-life-ring"></i>
                    <h4>Safe</h4>
                    <p>
                     Get what as you exactly picked "dacha" summer house, sanatorium or rest zone.  , no alternatives     
                    </p>
                </div>
                <div class="col-md-3 col-md-offset-1 text-center">
                    <i class="fa fa-balance-scale"></i>
                    <h4>Affordable</h4>
                    <p>
                    Find price that suits you best for "dacha" summer house, sanatorium and rest zone.     
                    </p>
                </div>
                <div class="col-md-3 col-md-offset-1 text-center">
                    <i class="fa fa-envelope-open"></i>
                    <h4>Immediate response</h4>
                    <p>
                     If you get any queries or feedbacks for "dacha", sanatorium or rest zone, you have a opportunity to ask  
                    </p>
                </div>
            </div>
        </div>   
    </section>
<!-- end of our services-->

    <section class="recently">
        <div class="container text-center">
            <i class="fa fa-calendar-check-o" style="font-size:40px;color:#9c5b57;"></i>
            <h3>RECENTLY ADDED ITEMS</h3>
            <p>Be in a loop with last added accommodations within a week</p>
            <div class="row" >
                <ul class="recently-carousel" >
                    <li>
                        <div class="inner-content" >
                            <img src="{{ asset('images/recentlyadded1.jpg')}}" alt="recentlyadded1">
                        </div>
                    </li>
                    <li>
                        <div class="inner-content">
                            <img src="{{ asset('images/recentlyadded2.jpg')}}" alt="recentlyadded2">
                        </div>
                    </li>
                    <li>
                        <div class="inner-content">
                            <img src="{{ asset('images/recentlyadded3.jpg')}}" alt="recentlyadded3">
                        </div>
                    </li>
                    <li>
                        <div class="inner-content">
                            <img src="{{ asset('images/recentlyadded4.jpg')}}" alt="recentlyadded4">
                        </div>
                    </li>
                    <li>
                        <div class="inner-content">
                            <img src="{{ asset('images/recentlyadded5.jpg')}}" alt="recentlyadded5">
                        </div>
                    </li>
                </ul>
            </div>
           <!-- <div class="recently-nav text-center">
                    <a class="prev" id="recently-prev text-center">&lt;</a>
                    <a class="next" id="recently-next text-center">&gt;</a>-->
            </div>
        </div>
    </section >


    <section class="parallax-scrolling">   
        <div class="container  text-center">
            <i class="fa fa-gg" style="font-size:40px;color:#9c5b57;"></i>
            <h4> OUR MOTTO</h4>
            <p>" Your summer house is here "</p>
            
             <div class="parallax">
                </div>
            <p class="parallax-p-2">
Far from being place to let the people to be informed with the advertised summer camp's cost, condition, and location, Erent can also be seen as a beneficial website for both sides providing high qualifies services and ensuring the user that they are in the highly optimized zone.
            </p>
        </div>
    </section>



    <footer class="footer-sec">
        <div class="row">
            <div class="col-md-4 fot-col-1">
              <div class="content footer-title">
                <h5>e-rent</h5>
                <p>Is the place where you may rent any sort accommodations with wonderful and affordable pricing. Furthermore, it contains wide variety of options to choose "dacha" summer house, sanatorium and rest zone.<hr></p>
              </div>
              <div class="icon">
                      <p class="follow"> Follow Us:</p>
                      <ul>
                        <li><a href="#"><i class="fa fa-facebook" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope" style="font-size:14px"></i></a></li>
                      </ul>
                    </div>
            </div>
            <div class="col-md-4 fot-col-2">
                <script>
            function myMap() {
              var mapCanvas = document.getElementById("map");
              var mapOptions = {
                center: new google.maps.LatLng(41.338525, 69.33453), zoom: 15
              };
              var map = new google.maps.Map(mapCanvas, mapOptions);
            }
            </script>
            <div id="map" style="width:350;height:300px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlOP58ZP5QjG95fWmkJG7ugfQsdl9aZpY&callback=myMap"></script> 
            </div>
            <div class="col-md-4 fot-col-3">
                <h5>SUPPORT SERVICE</h6>
                <div class="content ">
                    <div class="contact-phone">
                        <h6><i class="fa fa-phone" style="font-size:14px"></i>PHONE NUMBER:</h6><p> +99897 700 70 24</p>
                    </div>
                    <div class="contact-adress">
                        <h6><i class="fa fa-map-marker" style="font-size:14px"></i>ADDRESS:</h6><p> Uzbekistan, Tashkent city, Mirzo Ulugbek dist., Olcha Bog str., 118</p>
                    </div>
                    <div class="contact-mail">
                        <h6><i class="fa fa-envelope" style="font-size:14px"></i>EMAIL:</h6><p> juraeva-malika@mail.ru</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-foot text-center">
            <p>© 2018 e-rent CORPORATION. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>

  </body>
</html>




<!--<!doctydpe html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!--Fonts --
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles --
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Malika
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
-->
