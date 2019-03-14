
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="{{ asset('css/addcar.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">

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
                <form method="POST" action="" class="needs-validation" novalidate>
                @csrf
                <div class="row">
                    <div class="col-6">
                    <div class="form-group">
                        <label for="name">Car Name</label>
                        <input type="text" pattern="^[A-z]{3,}$" class="form-control" id="car_name" placeholder="Enter car name" required>
                        <div class="invalid-feedback">
                            Please choose a valid username.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="seater">Plate No.</label>
                        <input type="number" min="1000" max="9999" class="form-control" id="plate_no" placeholder="Enter plate number" required>
                        <div class="invalid-feedback">
                            Please enter a valid plate no. of 4 digits.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="seater">Seater</label>
                        <input type="number" min="1" max="6" class="form-control" id="seater" placeholder="Enter number of seater" required>
                        <div class="invalid-feedback">
                            Number of seats can only be between 1 and 6.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="airbags">Air Bags</label>
                        <input type="number" min="1" max="6" class="form-control" id="air_bag" placeholder="Enter number of air bags" required>
                        <div class="invalid-feedback">
                            Number of airbags can only be between 1 and 6.
                        </div>
                    </div>
                    </div>
                    <div class="col-6">
                    <div class="form-group">
                        <label for="imgpath">Image Path</label>
                        <input type="text" pattern="^img/[A-z]+.(jpg|png)$" class="form-control" id="img_path" placeholder="Enter path of image" required>
                        <div class="invalid-feedback">
                            Please enter the path as img/nameofcar.jpg or .png 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" min="0" class="form-control" id="price" placeholder="Enter price" required>
                        <div class="invalid-feedback">
                            Please enter the price
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price/km">Price per km</label>
                        <input type="number" min="0" class="form-control" id="price/km" placeholder="Enter price per kilometer" required>
                        <div class="invalid-feedback">
                            Please enter the price
                        </div>
                    </div>
                    </div>
                </div><br>
                <center><button type="submit" class="btn btn-primary btn-lg" style="width:50%">Submit</button></center>
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
<script>

</script>
{{-- @endsection --}}

</body>

</html>
