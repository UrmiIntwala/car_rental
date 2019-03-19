<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Car Rental</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fixed.css') }}">


	
</head>

<body>

    <nav class="navbar navbar-dark fixed-top" style="color:white;">
      <a class="navbar-brand mx-auto" href="#"><img src="img/lagoonj.png" alt="hello"></a>
        
        {{-- <a href="navbar-brand mx-auto" href="#"><img src="img/nuno.png" alt="hello"></a> --}}
    </nav>

    <div class="video-background">
        <div class="video-wrap">
            <video id="bgvid" autoplay loop muted placeinline>
                <source src="img/car_rent.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    <div class="caption text-center">
        <h1>WELCOME TO CAR RENTAL SYSTEM</h1>
        <h3>COME UP WITH INOVATIVE IDEA</h3>
    <a href="{{ url('welcome') }}" class="btn btn-outline-light btn-lg">GET STARTED</a>
    </div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>