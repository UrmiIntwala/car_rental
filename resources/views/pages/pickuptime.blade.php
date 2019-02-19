<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
            {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> --}}
            <title>CarRental</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="js/jquery.js"></script>
            <!-- Fonts -->
            <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
            <link href="{{ asset('css/pickuptime.css') }}" rel="stylesheet">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <br>
        <div class="container-fluid">
            <ul class="progressbar" style="font-size:120%;">
                <li class="done">Starting Point</li>
                <li class="active">Pickup Time</li>
                <li>Dropoff Time</li>
            </ul>
        </div><br><br><br><hr><br>
        <div class="container" >
             <h1>From when do you need the car?</h1>
             
             {{-- <div class="btn-group dropright">
                    <button type="button" class="btn btn-secondary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Select month
                    </button>
                    
                    <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">January</a>
                            <a class="dropdown-item" href="#">February</a>
                            <a class="dropdown-item" href="#">March</a>
                            <a class="dropdown-item" href="#">April</a>
                            <a class="dropdown-item" href="#">May</a>
                            <a class="dropdown-item" href="#">June</a>
                            <a class="dropdown-item" href="#">July</a>
                            <a class="dropdown-item" href="#">August</a>
                            <a class="dropdown-item" href="#">September</a>
                            <a class="dropdown-item" href="#">October</a>
                            <a class="dropdown-item" href="#">November</a>
                            <a class="dropdown-item" href="#">December</a>
                    </div>
                  </div> --}}
                  <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Dropdown button
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Link 1</a>
                          <a class="dropdown-item" href="#">Link 2</a>
                          <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                      </div>
                      

                  <div class="btn-group dropright">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropright
                        </button>
                        <div class="dropdown-menu">
                          <!-- Dropdown menu links -->
                          <a class="dropdown-item" href="#">January</a>
                            <a class="dropdown-item" href="#">February</a>
                            <a class="dropdown-item" href="#">March</a>
                            <a class="dropdown-item" href="#">April</a>
                            <a class="dropdown-item" href="#">May</a>
                            <a class="dropdown-item" href="#">June</a>
                            <a class="dropdown-item" href="#">July</a>
                            <a class="dropdown-item" href="#">August</a>
                            <a class="dropdown-item" href="#">September</a>
                            <a class="dropdown-item" href="#">October</a>
                            <a class="dropdown-item" href="#">November</a>
                            <a class="dropdown-item" href="#">December</a>
                        </div>
                      </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>