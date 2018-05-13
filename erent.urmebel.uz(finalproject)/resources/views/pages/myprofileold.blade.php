<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/Beka.css') }}">

        <!-- Fonts -->
        
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


  

    </head>
    <body>
        <div class="container">
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
        </div> 
    </body>
</html>
