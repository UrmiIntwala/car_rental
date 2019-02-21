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
      <link href="{{ asset('css/dropofftime.css') }}" rel="stylesheet">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


      
    </head>
    <body>
        <br>
        <div class="container-fluid">
            <ul class="progressbar" style="font-size:120%;">
                <li class="done">Starting Point</li>
                <li class="done">Pickup Time</li>
                <li class="active">Dropoff Time</li>
            </ul>
        </div><br><br><br><hr>
        {{-- {{  Form::open(array('uri'=>'dropoff', 'method' => 'post')) }} --}}
        {{-- <form action="dropofftime" method="POST"> --}}
        <!-- <form action="{{ route('card') }}"> -->
        <form action="card" method="get">
        <div class="container" >
          <h1>Till when do you need the car?</h1><br>

          {{-- <div class="input-group" style="width:30%">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01" style="font-weight:bold">Select Month</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
            </div> --}}
            <br>
            <span style="font-weight:bold">Select date</span>&nbsp;&nbsp;&nbsp;
            <input type="date" id="myDate">
            <br><br>
            <span style="font-weight:bold">At what time do you need the car</span>&nbsp;&nbsp;&nbsp;
            Hours:<input type="number" id="hours" min="1" max="12">&nbsp;&nbsp;&nbsp;
            Minutes:<input type="number" id="hours" min="00" max="55" step="5">&nbsp;&nbsp;&nbsp; 
            <br><br>
            <input type="submit" class="btn btn-success btn-lg">
        </div>
        <!-- {{  Form::close()  }}   -->
        </form>
        
        {{-- To get the value of date
          <button onclick="myFunction()">You selected</button>
        <p id="demo"></p>
        <script>
          function myFunction() {
            var x = document.getElementById("myDate").value;
            document.getElementById("demo").innerHTML = x;
          }
        </script> --}}
      {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>   --}}
</body>