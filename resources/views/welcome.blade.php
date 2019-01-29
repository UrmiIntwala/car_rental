<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <title>CarRental</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <nav class="navbar navbar-expand-md" style="background-color:#132639;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white;">
                    {{ config('', 'CarRental') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            @if (Route::has('login'))
                                @auth
                                    <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color:white;">Login</a>
                                    </li>

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}" style="color:white;">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                    </ul>
            </div>
            </div>
        </nav>
            
        <div class="bg" style="background-image:url(img/car.jpg);height:100%;">
            <p style="text-align:center;color:white;font-size:300%;font-weight:600;padding-top:10%;">DRIVE IN THE CITY AND OUTSTATION<p>
            <p style="text-align:center;color:white;font-size:150%;font-weight:500">
                Self Drive Car Rental in <select style="color:black" name="city">
                    <option value="surat">Surat</option>
                    <option value="ahmedabad">Ahmedabad</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="pune">Pune</option>
                    <option value="vadodra">Vadodra</option>
                  </select>
            </p>
            <br>
            <center><a href="cars">
            <button type="button" class="btn btn-block btn-lg" 
                style="width:50%;margin-top:3%;text-align:left;height:50px;background-color:white;">
                Start your wonderful journey
                   <span class="fa fa-chevron-right" aria-hidden="true" style="float:right;padding-top:4px"></span>
                
            </button></a>
            </center>   
            <br>
            <center>
            <div style="color:white;">
                <span class="fa fa-briefcase" aria-hidden="true" style="font-size:200%;"></span>
                <span style="font-size:120%;font-weight:700">LAGOON COMMUTE</span>&nbsp;&nbsp;&nbsp;
                <span class="fa fa-clock-o" aria-hidden="true" style="font-size:200%;"></span>
                <span style="font-size:120%;font-weight:700">DEAL SHACK</span>&nbsp;&nbsp;&nbsp;
                <span class="fa fa-star-o" aria-hidden="true" style="font-size:200%;"></span>
                <span style="font-size:120%;font-weight:700">OFFERS</span>
            </div>
            </center>
            <br><br><br>
            <center>
                    <button type="button" class="btn  btn-lg"
                    style="background-color:white;width:450px;height:100px;">
                    <div class="row">
                    <div class="col-sm-4">
                        <img src="img/caricon.png" style="height:70px;padding-right:40px;width:150px;">
                    </div>
                    <div class="col-sm-8">
                        <p style="color:green">SUBSCRIBE</p>
                        <p style="font-size:15px;">Get a hazzle free car for 6 to 24 months</p>
                    </div>
                    </div>
                    </button>
            </center>
            <br><br><br>
        </div>
        <br><br>
        <div class="container-fluid" style="text-align: center;color:darkslategray">
            <h3>THE LAGOONCAR ADVANTAGE</h3>
            <h6>We simplified car rentals, so you can focus on what's important to you</h6>
        </div><br><br>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="img/Capture1.png" alt="Image">
                </div>
                <div class="col-4">
                    <img src="img/Capture2.png" alt="Image">
                </div>
                <div class="col-4">
                    <img src="img/Capture3.png" alt="Image">
                </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-4">
                        <img src="img/Capture1.png" alt="Image">
                    </div>
                    <div class="col-4">
                        <img src="img/Capture2.png" alt="Image">
                    </div>
                    <div class="col-4">
                        <img src="img/Capture3.png" alt="Image">
                    </div>
                </div>
        </div>
    </body>
</html>
