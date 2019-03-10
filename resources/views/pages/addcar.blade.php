<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
  background-image: url("img/addcar.jpg");
  
  /* Add the blur effect */
  filter: blur(9px);
  -webkit-filter: blur(9px);

    /* filter: opacity(0.5);
  -webkit-filter: opacity(0.5); */
  
  /* Full height */
  height: 110%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size:auto;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 55%;
  left: 50%;
  bottom:-62%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  /* text-align: center; */
}
</style>
</head>
<body>
    {{-- {{$flag}} --}}
   @isset($flag)
   <div class="alert alert-success">
        Yes...Car successfully added
    </div>
   @endisset
<div class="bg-image"></div>

<div class="bg-text">
    <div class="container" style="margin-top:50px; margin-bottom:60px;">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h1 style="text-align:center;">ADD CAR</h1><br><br>
                <form method="POST" action="car">
                @csrf
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                        <label for="name">Car Name</label>
                        <input type="text" class="form-control" id="car_name" name="car_name" placeholder="Enter car name">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="seater">Plate No.</label>
                        <input type="text" class="form-control" id="plate_no" name="plate_no" placeholder="Enter plate number">
                    </div>
                    <div class="form-group">
                        <label for="seater">Seater</label>
                        <input type="text" class="form-control" id="seater" name="seater" placeholder="Enter number of seater">
                    </div>
                    <div class="form-group">
                        <label for="airbags">Air Bags</label>
                        <input type="text" class="form-control" id="air_bag" name="air_bag"  placeholder="Enter number of air bags">
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label for="imgpath">Image Path</label>
                        <input type="text" class="form-control" id="img_path" name="img_path" placeholder="Enter path of image">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label for="price/km">Price per km</label>
                        <input type="text" class="form-control" id="price_per_km" name="price_per_km" placeholder="Enter price per kilometer">
                    </div>
                    <div class="form-group">
                        <label for="price/km">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter price per kilometer">
                    </div>
                    </div>
                </div><br>
                <center><button type="submit" class="btn btn-primary btn-lg" style="width:50%">Submit</button></center>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>

</script>
</body>
</html>