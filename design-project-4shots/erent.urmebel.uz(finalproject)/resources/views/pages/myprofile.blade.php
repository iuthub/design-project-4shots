<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Profile</title>
        
        
        
        
        

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sign up</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app_parallax.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registrationvalidation.css') }}" rel="stylesheet">
        
        
        
        
        
        <!-- CSS and font links-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<link href=" {{asset('css/homepage.css') }}" rel="stylesheet" type="text/css">
<link href=" {{asset('css/slicknav.min.css') }}" rel="stylesheet" type="text/css">


<!-- Java Script links-->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>


</head>
 
<body>
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
               
                    
                     @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign up</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    
                    
                    
              
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>

        <section class="my-profile-page text-center">
             <i class="fa fa-user" style="font-size:40px; color:#9c5b57;"></i>
            <h5>MY PROFILE</h5>
            <div class="row">
                <div class="col-md-10 col-md-offset-1 main-part-profile">
                    <div class="col-md-2 container-profile text-center">
                    <h4>BIOGRAPHY</h4>
                    <h6>First name: <span>Malika</span></h6>

                    <h6>Last name: <span>Juraeva</span></h6>

                    <h6><i class="fa fa-phone" style="font-size:14px"></i>Phone number: <span>+99897700 70 24</span></h6>

                    <h6><i class="fa fa-map-marker" style="font-size:14px"></i>Adress: <span>Uzbekistan, Tashkent city, Mirzo Ulugbek dist., Olcha Bog str., 118</span></h6>

                    <h6>Date of Registration: <span>01.05.2018</span></h6>
                    </div>
                    <div class="col-md-7 another-part-profile">
                       <h4 class="heading-border-1"><span>ACTIVITIES</span></h4>
                       <div class="row posts">
                           <div class="col-md-2 image">
                             <img src=" {{ asset('images/recentlyadded1.jpg')}} " alt="">  
                           </div>
                           <div class="col-md-4 description">
                               <h5>Title of announcement</h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, tempora eos placeat fugiat saepe ullam!</p>
                               <button class="text-center"><a href="/announcement"> READ MORE</a></button>
                           </div>
                       </div>
                       <div class="row posts">
                           <div class="col-md-2 image">
                             <img src=" {{ asset('images/recentlyadded1.jpg')}} " alt="">  
                           </div>
                           <div class="col-md-4 description">
                               <h5>Title of announcement</h5>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, tempora eos placeat fugiat saepe ullam!</p>
                               <button class="text-center"><a href="/announcement"> READ MORE</a></button>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </section>
        <!--<div class="container">
            <div class="row">
                <div class="col-xs-3" id="border">
               <h3>Biography</h3>

                    <p class="line"><b>First Name: </b></p> <p class="line"> Megan </p>
                    <p class="line"><b>Last Name: </b></p> <p class="line"> Fox </p>
                    <p class="line"><b>Phone Number: </b></p> <p class="line"> +998999999999</p>
                    <p class="line"><b>Date of Registration: </b></p> <p class="line">01.05.2018</p>     
                </div>
                <div class="col-xs-9">
                <h1>Activities:  </h1>
                <h3> Post: </h3>
                <div>
                <div class="imagee">   
                <img class="dacha" src="{{ asset('images/Kise.jpg') }}">
                </div>
                <div class="title">
                <h3>Moya dacha</h3>
                 <p>It's very nice, jsut come enjoy, it located in ...<a href="#">read more</a></p>
                </div>

                </div>  
                </div>
               
            </div>
        </div> -->

        <footer class="footer-sec profile-foot">
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
