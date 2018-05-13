<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
       <link rel="stylesheet" href="{{ asset('css/my.css') }}" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Post Adding</title>
        <!--BOOTSTRAP-->
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  

       

                        <script>
                            var num =2;
                            function Upload() {
                             if(num<12){
                                var br = document.createElement("br");
                                var x = document.createElement("INPUT");
                                x.className = 'inpt'; 

                               
                                x.setAttribute("name", "image_"+num);
                                x.setAttribute("type", "file");

                                document.getElementById('here').appendChild(br);
                                document.getElementById('here').appendChild(x);
                                

                                num++;

                             }
                             else
                             {
                                 document.getElementById("x").disabled;
                             }
                            }
                        </script>

 
 
 
        
        
        
        

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
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
                    
                    
                    
              
                <form class="form-inline my-2 my-lg-0" >
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>
 

    <div class="card-body">
            <form action="/create" method="POST" enctype="multipart/form-data" class="add-post" >
                {{csrf_field()}}

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

                        <div class="col">
                            <div class="form-group">

                                <label for="Title">
                                Name:
                                </label>
                                <input type="text" id="Title" name="title" class="form-control">
                            </div>

                            <div class="form-group">

                                <label for="Description">
                                   Description:
                                </label>
                                <input type="text" id="Description" name="description" class="form-control">
                            </div>


                            <div class="form-group">
                                <select class="form-control" name="category">
                                    <option>Summer Cottage</option>
                                    <option>Recreation areas</option>
                                    <option>Sanatoriums</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Price">
                                    Price
                                </label>
                                <input type="text" id="Price" name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="price_type">
                                    <option>Dollar</option>
                                    <option>Sum</option>
                                    <option>Euro</option>

                                </select>
                            </div>
                                
                                
                                <div class="form-group">

                                <label for="Area">
                                   Area:
                                </label>
                                <input type="text" id="Area" name="area" class="form-control">
                            </div>
                                
                                 <div class="form-group">

                                <label for="room">
                                   Number of rooms:
                                </label>
                                <input type="text" id="Room" name="room" class="form-control">
                            </div>
                                
                             <div class="form-group">

                                <label for="Address">
                                Address:
                                </label>
                                <input type="text" id="address" name="address" class="form-control">
                            </div>   


                            <div class="form-group">

                                <input type="file"  name="image_1" >

                            </div>
                            <fieldset id="here">
                                
                            </fieldset>

                                     <div class="plus">     <img src="{{asset('images/p.png')}}" onclick="Upload()">
                                     </div>
                                <br />
                                   

                        </div>

                            <button type="submit" class="btn btn-success" style="margin-top: 10px; ">ADD</button>
            </form>
    </div>
    
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
