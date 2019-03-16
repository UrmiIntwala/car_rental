<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("img/innercity.jpg");
  
  /* Add the blur effect */
  filter: blur(9px);
  -webkit-filter: blur(9px);

    /* filter: opacity(0.5);
  -webkit-filter: opacity(0.5); */
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
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
                                        {{-- @if(Auth::user()->role_id==1) --}}
                                        @can('admin-only',Auth::user())
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" style="color:white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <i class="fa fa-briefcase">Admin</i> <span class="caret"></span>
                                            </a>
            
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ url('addcar') }}">                                              
                                                    Add car                           
                                                </a>
                                                <a class="dropdown-item" href="{{ url('addcity') }}">                                              
                                                    Add city
                                                    </a>
                                                <a class="dropdown-item" href="{{ url('addinnercity') }}">                                              
                                                    Add inner city                            
                                                </a>
                                            </div>
                                        </li> 
                                        @endcan
                                        
                                        {{-- @endif --}}
                                        {{-- <a class="dropdown-item" href="url('/admin')"> --}}
                                                    
                                                </a>
                                        <li class="nav-item dropdown" >
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle hover" style="color:white;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
<div class="bg-image"></div>

@isset($flag)
            {{-- print innercity added successfully!!! --}}
@endisset

<div class="bg-text">
    <div class="container" style="margin-top:50px; margin-bottom:60px;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h1>ADD PLACE IN CITY</h1><br><br>
                <form method="POST" action="addinnercity" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-2">
                            <h3>Place</h3>
                        </div>
                        <div class="col-10">
                            <div class="form-group">
                                <input style="width:350px;"type="text" class="form-control form-control-lg" id="place" name="place" placeholder="Enter place of city" required>
                                <div class="invalid-feedback">
                                    Please choose a valid innercity.
                                </div> 
                            </div>
                            
                        </div>
                    </div>
                </div><br>
                <center><button type="submit" style="width:150px;" class="btn btn-lg btn-light">Submit</button></center>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>