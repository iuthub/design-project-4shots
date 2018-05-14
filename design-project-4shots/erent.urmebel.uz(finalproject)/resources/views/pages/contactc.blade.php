<!doctype html>
<html lang="en">
<head>
<!-- Meta tags -->
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSS and font links--><!--
<link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link href=" {{asset('css/homepage.css') }}" rel="stylesheet" type="text/css">
<link href=" {{asset('css/slicknav.min.css') }}" rel="stylesheet" type="text/css">-->


<!-- Java Script links--><!--
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/carouFredSel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/homepage.js') }}"></script>
-->
<!--BEKA-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<style>
		.invalid-feedback
		{
			display: block;
		}
	</style>

</head>
 
</style>
<body>
    <section class="seach-field">
        <div class="full-width search">
            <div class="search-form">
                <input type="text" name=" " placeholder="Search...">
                <div class="close"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
        </div>
    </section>


    <header>
        <nav>
        <div class="container">

            <div class="row">
                <a href="#" > <img src=" {{ asset('images/thehouse2.png')}} " alt="logoofnav" class="logo"></a>
                <nav>
                    <ul class="menu" id="menu">
                        <li><a href="/"><i class="fa fa-home" style="font-size:14px"></i>Home</a></li>
                        <li><a href="#"><i class="fa fa-align-left" style="font-size:14px"></i>Categories</a></li>
                        <li><a href="/about"><i class="fa fa-group" style="font-size:14px"></i>About</a></li>
                        <li><a class="active" href="/contact"><i class="fa fa-address-book" style="font-size:14px"></i>Contact Us</a></li>
                        <li><a href="/register"><i class="fa fa-sign-in" style="font-size:14px"></i>Sign Up</a></li>
                        <li ><a class="search-icon" style="font-size:15px"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </nav>
</header>

<!--Here I come-->
<div class="container">
		<div class="row">

			<div class="col-md-6">
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
		</div>
	</div>


  </body>
</html>


