<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <title>CarRental</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/jquery.js"></script>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/startingpoint.css') }}" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <br>
        <div class="container-fluid">
            <ul class="progressbar" style="font-size:120%;">
                <li class="active">Starting Point</li>
                <li>Pickup Time</li>
                <li>Dropoff Time</li>
            </ul>
        </div><br><br><br><hr><br>
        <div class="container">
            <form action="second" method="POST">
            <!-- {!! Form::open(['uri'=>'demo','method'=>'POST','role'=>'form']) !!} -->
            @csrf
            <h2>Tell us your Starting Point</h2>
            <br>
            <div class="row">
                <div class="col-3 form-group">
                        {{-- {!! Form::open(['route' => 'test', 'class' => 'd-flex', 'method' => 'post']) !!} --}}
                        <input class="form-control form-control-lg" style="width:100%" type="text"
                        placeholder="Enter City" id="city_name" name="city_name"/>
                        <div id="cityList"></div><br>
                        
                        {{-- <input type="submit" value="submit" class="btn btn-success"> --}}
                        
                        {{-- <a href="/demo"></button></a> --}}
                        {{--   --}}
                </div>
                <div class="col-9">
                    <input class="form-control form-control-lg" style="width:70%" type="text"
                     placeholder="Tell us your starting point in selected city" id="location_name">
                     <div id="locationList"></div>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <h4>I want to drop my car in a different city</h4>
                </div>
                <div class="col">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
        <br>
        <div class="container" id="hide" style="display:none;">
                <div class="row">
                        <div class="col-3">
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn btn btn-outline-primary">Select City</button>
                                <div id="myDropdown" class="dropdown-content">
                                    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                                    <a href="#">Ahmedabad</a>
                                    <a href="#">Amritsar</a>
                                    <a href="#">Banglore</a>
                                    <a href="#">Bhopal</a>
                                    <a href="#">Bhubaneshwar</a>
                                    <a href="#">Calicut</a>
                                    <a href="#">Chandigarh</a>
                                    <a href="#">Chennai</a>
                                    <a href="#">Coimbatore</a>
                                    <a href="#">Delhi NCR</a>
                                    <a href="#">Guntur</a>
                                    <a href="#">Guwahati</a>
                                    <a href="#">Hubli</a>
                                    <a href="#">Hyderabad</a>
                                    <a href="#">Indore</a>
                                    <a href="#">Jaipur</a>
                                    <a href="#">Jodhpur</a>
                                    <a href="#">Kochi</a>
                                    <a href="#">Kolkata</a>
                                    <a href="#">Lucknow</a>
                                    <a href="#">Ludiana</a>
                                    <a href="#">Manglore</a>
                                    <a href="#">Mumbai</a>
                                    <a href="#">Mysore</a>
                                    <a href="#">Nagpur</a>
                                    <a href="#">Nashik</a>
                                    <a href="#">Patana</a>
                                    <a href="#">Pune</a>
                                    <a href="#">Raipur</a>
                                    <a href="#">Ranchi</a>
                                    <a href="#">Siliguri</a>
                                    <a href="#">Surat</a>
                                    <a href="#">Tirupati</a>
                                    <a href="#">Trichy</a>
                                    <a href="#">Trivandrum</a>
                                    <a href="#">Udaipur</a>
                                    <a href="#">Udipi-Manipal</a>
                                    <a href="#">Vadodra</a>
                                    <a href="#">Vijayawada</a>
                                    <a href="#">Vizag</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-9">
                            <input class="form-control form-control-lg" style="width:70%" type="text"
                             placeholder="Tell us your droping point in selected city">
                        </div>
                    </div><br>
        </div><br>
        
        {{Form::submit('NEXT',['class'=>'button btn btn-success','style'=>'width: 15%;margin-left:80%'])}}
        {{ csrf_field() }}
        <!-- {!! Form::close() !!} -->
        </form>
        <script>
            $(document).ready(function(){
                $("span").click(function(){
                $("#hide").toggle();
                });

                $('#city_name').keyup(function(){
                    var query=$(this).val();
                    if(query!='')
                    {
                        var _token=$('input[name="_token"]').val();
                        $.ajax({
                            url:"{{ route('car.fetch') }}",
                            method:"post",
                            data:{query:query,_token:_token},
                            success:function(data)
                            {
                                $('#cityList').fadeIn();
                                $('#cityList').html(data);
                            }
                        });
                    }
                });

                $('#location_name').keyup(function(){
                    var query=$(this).val();
                    if(query!='')
                    {
                        var _token=$('input[name="_token"]').val();
                        $.ajax({
                            url:"{{ route('location.fetch') }}",
                            method:"post",
                            data:{query:query,_token:_token},
                            success:function(data)
                            {
                                $('#locationList').fadeIn();
                                $('#locationList').html('hello');
                            }
                        });
                    }
                });
                
                
            });
            // $(document).ready(function(){
            //     $('a').click(function(){
            //         //var fill=$(this).val();
            //         //$('#city_name').html(fill);
            //         alert("The paragraph was clicked.");
            //     });
            // });
        </script>
        <script>
                /* When the user clicks on the button,
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }
                
                function filterFunction() {
                  var input, filter, ul, li, a, i;
                  input = document.getElementById("myInput");
                  filter = input.value.toUpperCase();
                  div = document.getElementById("myDropdown");
                  a = div.getElementsByTagName("a");
                  for (i = 0; i < a.length; i++) {
                    txtValue = a[i].textContent || a[i].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                      a[i].style.display = "";
                    } else {
                      a[i].style.display = "none";
                    }
                  }
                }
                </script>
                

 
        
        {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
        {{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>