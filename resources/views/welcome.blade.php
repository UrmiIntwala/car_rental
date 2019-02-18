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
                                    {{-- <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                                    </li> --}}
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color:white;font-size:120%">Login</a>
                                    </li>&nbsp;&nbsp;&nbsp;

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}" style="color:white;font-size:120%">Register</a>
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
            <center><a href="startingpoint">
            <button type="button" class="btn btn-block btn-lg" 
                style="width:50%;margin-top:3%;text-align:left;height:50px;background-color:white;">
                Start your wonderful journey
                   <span class="fa fa-chevron-right" aria-hidden="true" style="float:right;padding-top:7px"></span>
                
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
        </div><br>
        <div>
            <img src="img/rapid.jpg" style="width:100%;height:500px;position:absolute;opacity:0.9" alt="Creta"/>
            <p style="padding-top:120px;position:relative;color:white;padding-left:400px;font-stretch:expanded;">
                <b style="font-size:200%;">CAR ON THE GO!</b><br>
                <span style="font-size:150%">Make a booking,unlock your car,and end 
                <br>your reservation all from our website.</span>
            </p>   
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="container-fluid" style="text-align: center;color:darkslategray">
            <h3>HOW LAGOON WORKS</h3>
            <h6>Drive yourself to an adventure and back in 5 simple steps</h6>
        </div><br><br>
        <div class="container-fluid" style="padding-left:100px;">
            <img src="img/work1.PNG" alt="work-process">
            <img src="img/work2.PNG" alt="work-process">
            <img src="img/work3.PNG" alt="work-process">
            <img src="img/work4.PNG" alt="work-process">
            <img src="img/work5.PNG" alt="work-process">
        </div>
        <br><br>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="img/collage.jpg" alt="First slide" 
                    style="filter:blur(8px);height:500px;width:100%">
                <div class="container">
                <div class="carousel-caption text-left" 
                    style="padding-top:5px;;color:black;font-weight:bolder;font-size:150%;">
                    <p>Appreciate the totally new welcome concept.As an prospective customer , 
                            I feel this is going to really set an example in car rentals scenery.
                            Wishing you the very best and come out in flying colors!!
                    </p>
                    <p>- Yekula Santosh</p>
                    
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="img/collage.jpg" alt="Second slide"
                style="filter:blur(8px);height:500px;width:100%">
                <div class="container">
                <div class="carousel-caption"
                style="padding-top:5px;;color:black;font-weight:bolder;font-size:150%;">
                    <p>The experience with lagoon has been excellent.Your process is well 
                            thought out and service definitely fills a void. Maybe you could 
                            start a school which teaches "real customer service"!
                    </p>
                    <p>- Sunil Rastogi</p>
                    
                </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="img/collage.jpg" alt="Third slide"
                style="filter:blur(8px);height:500px;width:100%">
                <div class="container">
                <div class="carousel-caption text-right"
                style="padding-top:5px;;color:black;font-weight:bolder;font-size:150%;">
                    <p>Excellent customer service.Would highly recommend LAGOON to anybody
                            who is in need of self drive cars.Would be great if they start 
                            opening more pick up points.
                    </p>
                    <p>- Arun M</p>
                    
                </div>
                </div>
            </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <div class="container-fluid">
            <img src="img/info.PNG" alt="info">
        </div>

        <div class="page-footer" style="background-color:#132639;color:white;height:200px;">
            <div class="container">
                <div class="row" style="font-size:180%;padding-top:80px;">
                    <div class="col-2">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div style="background-color:#19334d;padding-top:45px;color:white;text-align:center;height:30px">
                <p style="font-size:125%">© 2018 Copyright:Lagoon.com</p>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
