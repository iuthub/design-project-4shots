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
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>

</head>
 
<body>
    <section class="items-logo">
        <img src="{{ asset('images/thehouse.png') }}" alt="">
        
    </section>

    <nav>
        <div id="navbar-summerhouse">
            <ul class="sticky-nav">
                <li><a href="/"><i class="fa fa-home" style="font-size:14px"></i>Home</a></li>
                <li class="dropdown"><a><i class="fa fa-align-left" style="font-size:14px"></i>Categories<i class="fa fa-caret-down" style="font-size:14px"></i></a>
                    <div class="dropdown-content">
                        <a class="active" href="/summerhouse">Summer cottage</a>
                        <a href="/recreationareas">Recreation areas</a>
                        <a href="/sanatoriums">Sanatoriums</a>
                    </div>
                </li>
                <li><a href="/about"><i class="fa fa-group" style="font-size:14px"></i>About</a></li>
                <li><a href="/contact"><i class="fa fa-address-book" style="font-size:14px"></i>Contact Us</a></li>
                <li><a href="/register"><i class="fa fa-sign-in" style="font-size:14px"></i>Sign Up</a></li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
    <section class="about-us">   
        <div class="container-1 text-center">
            <i class="fa fa-group" style="font-size:40px; color:#9c5b5;"></i>
            <h4> ABOUT US </h4>
            <p>The company called “e-rent” provides services for those, who wants easily and quickly to find and rent summer house(dacha), which suits them and also for those, who has cottages and would like to announce their country house worldwide, so to pick up customers for making business (profit).</p>
             </div>
               </section>
            <div class="parallax-about-us" data-parallax="scroll" data-image-src=" {{asset('images/природа.jpg')}} ">
                </div>

    <section class="team-area" id="team">
      <div class="container">
       
        <div class="row">
          <div class="col-md-12 tittle-ourteam text-center">
            <h2>OUR TEAM</h2>
            <!--<div class="sub-heading">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos, eligendi <br>suscipit. Lorem ipsum dolor sit amet, consectetur adipisicing <br>elit. Error eos, eligendi suscipit.</p>
            </div>-->
          </div>
        </div>

         <!-- Fisrt member- Project Manager -->
        <div class="row">
          <div class="col-md-2 col-sm-3">
            <div class="team-block">
              <div class="team-man">
                <img src="{{ asset('images/Aziz.jpg')}}" alt="Aziz">
              </div>
              <div class="team-description text-center">
                <div class="tittle-members">
                  <h3>Aziz Abdulkhakov</h3>
                  <span>Back-end <br>developer</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos, eligendi suscipit.</p>
                <div class="team-social-network ">
                  <a href=""><i class="fa fa-facebook"></i> </a>
                  <a href=""><i class="fa fa-linkedin"></i> </a>
                  <a href=""><i class="fa fa-envelope"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <!--Second member- Front-end designer-->
          <div class="col-md-2 col-sm-3">
            <div class="team-block">
              <div class="team-man">
                <img src="{{ asset('images/Beka.jpg')}}" alt="Beka">
              </div>
              <div class="team-description text-center">
                <div class="tittle-members ">
                  <h3>Bekhzod Shaymonov</h3>
                  <span>Front-end developer</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos, eligendi suscipit.</p>
                <div class="team-social-network">
                  <a href=""><i class="fa fa-facebook"></i> </a>
                  <a href=""><i class="fa fa-linkedin"></i> </a>
                  <a href=""><i class="fa fa-envelope"></i> </a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Third member-->
          <div class="col-md-2 col-sm-3">
            <div class="team-block">
              <div class="team-man">
                <img src="{{ asset('images/Malika.jpg')}}" alt="Malika">
              </div>
              <div class="team-description text-center">
                <div class="tittle-members text-center">
                  <h3>Malika <br>Juraeva</h3>
                  <span>Front-end developer<br></span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos, eligendi suscipit.</p>
                <div class="team-social-network">
                  <a href=""><i class="fa fa-facebook"></i> </a>
                  <a href=""><i class="fa fa-linkedin"></i> </a>
                  <a href=""><i class="fa fa-envelope"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-3">
            <div class="team-block">
              <div class="team-man">
                <img src="{{ asset('images/Kama2.jpg')}}" alt="Kama">
              </div>
              <div class="team-description text-center">
                <div class="tittle-members">
                  <h3>Kamronbek Begmatov</h3>
                  <span>Back-end <br>developer</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos, eligendi suscipit.</p>
                <div class="team-social-network">
                  <a href=""><i class="fa fa-facebook"></i> </a>
                  <a href=""><i class="fa fa-linkedin"></i> </a>
                  <a href=""><i class="fa fa-envelope"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-3">
            <div class="team-block">
              <div class="team-man">
                <img src="{{ asset('images/Bek.jpg')}}" alt="Bekhzodkhuja">
              </div>
              <div class="team-description text-center">
                <div class="tittle-members">
                  <h3>Bekhzodkhuja Shavkatov</h3>
                  <span>Front-end developer<br></span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eos, eligendi suscipit.</p>
                <div class="team-social-network">
                  <a href=""><i class="fa fa-facebook"></i> </a>
                  <a href=""><i class="fa fa-linkedin"></i> </a>
                  <a href=""><i class="fa fa-envelope"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
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


    </section>
  </body>
</html>





<!--<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts --
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
                    About {{ $name }}
                </div>
                <h5>Hello! My fullname is {{ $fullname }}. I'm studying at Inha University in Tashkent in Computer sciene faculty. One of the Major subjects is {{$subjects['major']}} and selective one is {{$subjects['selective']}}. </h5>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forget</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>-->
