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
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

<link href=" {{asset('css/homepage.css') }}" rel="stylesheet" type="text/css">
<link href=" {{asset('css/slicknav.min.css') }}" rel="stylesheet" type="text/css">


<!-- Java Script links-->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
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
                        <a href="/summerhouse">Summer cottage</a>
                        <a class="active" href="/recreationareas">Recreation areas</a>
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
    
<!--<header class="parallax-item-page">
    <div class="back-obj">
        <img src=" {{ asset('images/for-rent3.png') }} " alt="">
    </div>
    <div class="logo">
    <img src=" {{ asset('images/thehouse5.png') }} " alt=""> 
    </div>
    <div class="front-obj">
        <img src=" {{ asset('images/hhouse.jpg') }} " alt="">
    </div>
</header>-->

<section class="title-item-page">
    <article class="text-center">
        <div class="content">
            <h1>Recreation areas</h1>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, ex saepe. Tempora reiciendis ducimus vero culpa, incidunt quidem commodi laboriosam non quos soluta nam fuga atque. Enim, iure, minus! Consequuntur nobis quod qui omnis esse laudantium labore tenetur temporibus ipsa, ratione modi ad reiciendis eaque, commodi deleniti similique laborum. Lorem ipsum dolor sit amet. </p>
            <hr>
        </div>
        </article>  
    </section>
    <section class="announcements">
        <div class="row items">
            <div class="col-md-4 col-md-offset-1 text-center">
            <a href="announcement"><img src="{{ asset('images/dacha.jpg') }}" alt=""></a>
            </div>
            <div class="col-md-4 col-md-offset-1 content">
            <h3><a href="/announcement">Title of announcement</a></h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nesciunt, sed et tenetur id aliquid? Vero similique enim porro natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eaque iure nemo esse, fugit distinctio magnam. Dolorum, magnam, id? Aperiam! </p>

                <div class="location">
                    <h6>Location: </h6>
                    <span>Uzbekistan, Tashkent city, Mirzo Ulugbek dist., Olcha Bog str., 118 </span>
                </div>

                <div class="price text-center">
                    <h6>Read more</h6>
                    <h5>500$</h5>  
                </div>
                <div class="rating">
                    <div class="views">
                        <p> Views:</p> <i class="fa fa-eye" style="font-size:14px"></i> <p>1200</p>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                      </ul>
                </div>
            </div>
        </div>

        <div class="row items">
            <div class="col-md-4 col-md-offset-1 text-center">
            <a href="announcement"><img src="{{ asset('images/dacha.jpg') }}" alt=""></a>
            </div>
            <div class="col-md-4 col-md-offset-1 content">
            <h3><a href="/announcement">Title of announcement</a></h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nesciunt, sed et tenetur id aliquid? Vero similique enim porro natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eaque iure nemo esse, fugit distinctio magnam. Dolorum, magnam, id? Aperiam! </p>

                <div class="location">
                    <h6>Location: </h6>
                    <span>Uzbekistan, Tashkent city, Mirzo Ulugbek dist., Olcha Bog str., 118 </span>
                </div>

                <div class="price text-center">
                    <h6>Read more</h6>
                    <h5>500$</h5>  
                </div>
                <div class="rating">
                    <div class="views">
                        <p> Views:</p> <i class="fa fa-eye" style="font-size:14px"></i> <p>1200</p>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                      </ul>
                </div>
            </div>
        </div>

        <div class="row items">
            <div class="col-md-4 col-md-offset-1 text-center">
            <a href="announcement"><img src="{{ asset('images/dacha.jpg') }}" alt=""></a>
            </div>
            <div class="col-md-4 col-md-offset-1 content">
            <h3><a href="/announcement">Title of announcement</a></h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nesciunt, sed et tenetur id aliquid? Vero similique enim porro natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eaque iure nemo esse, fugit distinctio magnam. Dolorum, magnam, id? Aperiam! </p>

                <div class="location">
                    <h6>Location: </h6>
                    <span>Uzbekistan, Tashkent city, Mirzo Ulugbek dist., Olcha Bog str., 118 </span>
                </div>

                <div class="price text-center">
                    <h6>Read more</h6>
                    <h5>500$</h5>  
                </div>
                <div class="rating">
                    <div class="views">
                        <p> Views:</p> <i class="fa fa-eye" style="font-size:14px"></i> <p>1200</p>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                      </ul>
                </div>
            </div>
        </div>

        <div class="row items">
            <div class="col-md-4 col-md-offset-1 text-center">
            <a href="announcement"><img src="{{ asset('images/dacha.jpg') }}" alt=""></a>
            </div>
            <div class="col-md-4 col-md-offset-1 content">
            <h3><a href="/announcement">Title of announcement</a></h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nesciunt, sed et tenetur id aliquid? Vero similique enim porro natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eaque iure nemo esse, fugit distinctio magnam. Dolorum, magnam, id? Aperiam! </p>

                <div class="location">
                    <h6>Location: </h6>
                    <span>Uzbekistan, Tashkent city, Mirzo Ulugbek dist., Olcha Bog str., 118 </span>
                </div>

                <div class="price text-center">
                    <h6>Read more</h6>
                    <h5>500$</h5>  
                </div>
                <div class="rating">
                    <div class="views">
                        <p> Views:</p> <i class="fa fa-eye" style="font-size:14px"></i> <p>1200</p>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                      </ul>
                </div>
            </div>
        </div>

        <div class="row items">
            <div class="col-md-4 col-md-offset-1 text-center">
            <a href="announcement"><img src="{{ asset('images/dacha.jpg') }}" alt=""></a>
            </div>
            <div class="col-md-4 col-md-offset-1 content">
            <h3><a href="/announcement">Title of announcement</a></h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nesciunt, sed et tenetur id aliquid? Vero similique enim porro natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eaque iure nemo esse, fugit distinctio magnam. Dolorum, magnam, id? Aperiam! </p>

                <div class="location">
                    <h6>Location: </h6>
                    <span>Uzbekistan, Tashkent city, Mirzo Ulugbek dist., Olcha Bog str., 118 </span>
                </div>

                <div class="price text-center">
                    <h6>Read more</h6>
                    <h5>500$</h5>  
                </div>
                <div class="rating">
                    <div class="views">
                        <p> Views:</p> <i class="fa fa-eye" style="font-size:14px"></i> <p>1200</p>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                      </ul>
                </div>
            </div>
        </div>

        <div class="row items">
            <div class="col-md-4 col-md-offset-1 text-center">
            <a href="announcement"><img src="{{ asset('images/dacha.jpg') }}" alt=""></a>
            </div>
            <div class="col-md-4 col-md-offset-1 content">
            <h3><a href="/announcement">Title of announcement</a></h3>
            <hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nesciunt, sed et tenetur id aliquid? Vero similique enim porro natus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum eaque iure nemo esse, fugit distinctio magnam. Dolorum, magnam, id? Aperiam! </p>

                <div class="location">
                    <h6>Location: </h6>
                    <span>Uzbekistan, Tashkent city, Mirzo Ulugbek dist., Olcha Bog str., 118 </span>
                </div>

                <div class="price text-center">
                    <h6>Read more</h6>
                    <h5>500$</h5>  
                </div>
                <div class="rating">
                    <div class="views">
                        <p> Views:</p> <i class="fa fa-eye" style="font-size:14px"></i> <p>1200</p>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                        <li><a href="#"><i class="fa fa-star-o" style="font-size:14px"></i></a></li>
                      </ul>
                </div>
            </div>
        </div>
    </section>
<!--********************************************Footer****************************-->
 <footer class=" footer-sec">
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
