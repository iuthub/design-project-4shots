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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/carouFredSel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                <li><a href="/register"><i class="fa fa-sign-in" style="font-size:14px"></i>Sign Up</a></li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </ul>
        </div>
    </nav>

    <section class="header-announcement">
        <div class="container">
            <div class="row">
                <div class="col-md-3 sidebar-announcement">
                    <h5>Full details</h5>
                    <h6>Number of rooms: <span>{{$product->rooms}}</span> </h6>
                    <h6>Total area: <span>{{$product->area}}</span> </h6>
                    
                   
                    <h6>Price <span>{{$product->price}} {{$product->price_type}}</span> </h6>
                    <h6>Phone number<span>+998 {{$user->number}}</span> </h6>
                </div>

                <div class="col-md-9 announcement">
                     <section class="single-post">
                        <h4 class="heading-border-1"><span>{{$product->title}}</span></h4>
                        <p class="text-center">{{$product->description}}</p>
                    </section>
                </div>
            </div>
        </div>
    </section>
   <section class="item-images">
 <div class="row">
  @if($images->image_1)
  <div class="col-md-4">
    <div class="thumbnail" id="overlay">
        <img src="/images/{{$product->id}}/{{$images->image_1}}" style="width:100%"class="zoom">
    </div>
  </div>
  @if($images->image_2)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_2}}" style="width:100%" class="zoom">
    </div>
  </div>
  @if($images->image_3)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_3}}" style="width:100%" class="zoom">
    </div>
  </div>
</div>
 @if($images->image_4)
 <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_4}}" style="width:100%" class="zoom">
    </div>
  </div>
   @if($images->image_5)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_5}}" style="width:100%" class="zoom">
    </div>
  </div>
   @if($images->image_6)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_6}}" style="width:100%" class="zoom">
    </div>
  </div>
</div>
 <div class="row">
      @if($images->image_7)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_7}}" style="width:100%" class="zoom">
    </div>
  </div>
   @if($images->image_8)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_8}}" style="width:100%" class="zoom">
    </div>
  </div>
   @if($images->image_9)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_9}}" style="width:100%" class="zoom">
    </div>
  </div>
   @if($images->image_10)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_10}}" style="width:100%" class="zoom">
    </div>
  </div>
   @if($images->image_11)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_11}}" style="width:100%" class="zoom">
    </div>
  </div>
   @if($images->image_12)
  <div class="col-md-4">
    <div class="thumbnail">
        <img src="/images/{{$product->id}}/{{$images->image_12}}" style="width:100%" class="zoom">
    </div>
  </div>
  @endif
  @endif
  @endif
  @endif
  @endif
  @endif
  @endif
  @endif
  @endif
  @endif
  @endif
  @endif
</div>
</section>


    <footer class="footer-sec">
        <div class="row">
            <div class="col-md-4 fot-col-1">
              <div class="content footer-title">
                <h5>e-rent</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis deleniti eos aut recusandae quam perferendis soluta cumque, ratione ad repudiandae!<hr></p>
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
                 <h5>FEATURED POSTS</h5>
                <div class="posts">
                    <div class="post-item">
                        <div class="image">
                            <a href="#"><img src="{{ asset('images/recentlyadded5.jpg')}}" alt="image"></a>
                        </div>
                        <div class="post-content">
                            <p><a href="#">TITLE OF POST №1</a></p>
                            <span>APRIL, 2018</span>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="image">
                            <a href="blog-post-detail.html"><img src="{{ asset('images/recentlyadded5.jpg')}}" alt="image"></a>
                        </div>
                        <div class="post-content">
                            <p><a href="blog-post-detail.html">TITLE OF POST №2</a></p>
                            <span>APRIL, 2018</span>
                        </div>
                    </div>
                     <div class="post-item">
                        <div class="image">
                            <a href="blog-post-detail.html"><img src="{{ asset('images/recentlyadded5.jpg')}}" alt="image"></a>
                        </div>
                        <div class="post-content">
                            <p><a href="blog-post-detail.html">TITLE OF POST №3</a></p>
                            <span>APRIL, 2018</span>
                        </div>
                    </div>
                </div>
            </div>
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