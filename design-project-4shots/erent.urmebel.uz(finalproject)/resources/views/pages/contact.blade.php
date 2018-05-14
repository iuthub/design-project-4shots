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


<!--Java Script links-->
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" ></script>
	<!--<style>
		.invalid-feedback
		{
			display: block;
		}
	</style>-->

</head>
<body >
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
                <li><a href="/"><i class="fa fa-home" style="font-size:14px"></i>Home</a></li>
                <li><a id="text" href="#"><i class="fa fa-align-left" style="font-size:14px"></i>Categories<i class="fa fa-caret-down" style="font-size:14px"></i></a>
                    <ul>
                        <li><a href="/summerhouse">Summer Cottage</a></li>
                        <li><a href="/recreationareas">Recreation areas</a></li>
                        <li><a href="/sanatoriums">Sanatoriums</a></li>
                    </ul>
                </li>
                <li><a href="/about"><i class="fa fa-group" style="font-size:14px"></i>About</a></li>
                <li><a class="active" href="/contact"><i class="fa fa-address-book" style="font-size:14px"></i>Contact Us</a></li>
                <li><a href="/register"><i class="fa fa-sign-in" style="font-size:14px"></i>Sign Up</a></li>
                <li ><a class="search-icon" style="font-size:15px"><i class="fa fa-search" aria-hidden="true"></i></a></li>
            </ul>
            <div style="clear:both"></div>
        </div>
 </header>

<div class="parallax-window" data-parallax="scroll" data-image-src=" {{asset('images/parallax.jpg')}} ">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-1-contact-us"></div>
			<div class="col-md-4 col-2-contact-us">
					<h1>Contact us</h1>
				@if(Session::has('flash_message'))
				<div class="alert alert-success">{{Session::get('flash_message') }}</div>
				@endif
				<form method="post" action="{{ route('contact.store') }}">
					{{ csrf_field() }}

					<div class="form-group">
						<label >Full name: </label>
						<input type="text" class="form-control" name="name">
						@if ($errors->has('name'))
						<small class="form-text invalid-feedback">{{ $errors->first('name') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label >Email address: </label>
						<input type="text" class="form-control" name="email">
						@if ($errors->has('email'))
						<small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
						@endif
					</div>

					<div class="form-group">
						<label > Message: </label>
						<textarea name="message" class="form-control "></textarea>
						@if ($errors->has('message'))
						<small class="form-text invalid-feedback">{{ $errors->first('message') }}</small>
						@endif
					</div>

					<button class="btn btn-primary">Submit</button>			
				</form>
			</div>
		    <div class="col-md-4 col-3-contact-us"></div>
		</div>
	</div>
</div>
<footer class="footer-sec contact-us">
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


