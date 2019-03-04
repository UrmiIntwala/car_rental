<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    body{
        background-image:url('img/addcar.jpg')
    }
</style>
<body>
<div class="container" style="margin-top:50px; margin-bottom:60px;">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow p-3  rounded" style="background-color:lightsteelblue">
                <div class="card-header" style="text-align:center; font-weight:bold; font-size:200%">{{ __('ADD CAR') }}</div>
                {{-- <h1 style="text-align:center">ADD CAR</h1> --}}
                <div class="card-body">
                    <form method="POST" action="">
                    @csrf
                        <div class="form-group">
                            <label for="name">Car Name</label>
                            <input type="text" class="form-control" id="car_name" placeholder="Enter car name">
                            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                            <label for="seater">License</label>
                            <input type="text" class="form-control" id="license" placeholder="Enter license number">
                        </div>
                        <div class="form-group">
                            <label for="seater">Seater</label>
                            <input type="text" class="form-control" id="seater" placeholder="Enter number of seater">
                        </div>
                        <div class="form-group">
                            <label for="airbags">Air Bags</label>
                            <input type="text" class="form-control" id="air_bag" placeholder="Enter number of air bags">
                        </div>
                        <div class="form-group">
                            <label for="agelimit">Age Limit</label>
                            <input type="text" class="form-control" id="age_limit" placeholder="Enter age limit">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label for="price/km">Price per km</label>
                            <input type="text" class="form-control" id="price/km" placeholder="Enter price per kilometer">
                        </div>
                        <center><button type="submit" class="btn btn-primary">Submit</button></center>                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>