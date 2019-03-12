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
  background-image: url("img/bookdetails.jpg");
  
  /* Add the blur effect */
  filter: blur(3px);
  -webkit-filter: blur(3px);

    /* filter: opacity(0.5);
  -webkit-filter: opacity(0.5); */
  
  /* Full height */
  height: 110%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size:cover;
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
  bottom:-60%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  /* text-align: center; */
}
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
    <div class="container" style="margin-top:50px; margin-bottom:60px;">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h1 style="text-align:center;">BOOKING DETAILS</h1><br><br>
                <form method="get" action="from_user_info">
                @csrf
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter your name">
                        {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                    </div>
                    <div class="form-group">
                        <label for="license_no">License No.</label>
                        <input type="text" class="form-control" id="license_no" name="license_no" placeholder="Enter your license number">
                    </div>
                    <div class="form-group">
                        <label for="mobile_no">Mobile No.</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email ID</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address">
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label for="aadhar">Aadhar Card No.</label>
                        <input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="Enter your aadhar card number">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="user_address" name="user_address" rows="5" placeholder="Enter your address"></textarea>
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

</body>
</html>