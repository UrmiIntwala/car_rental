<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="{{ asset('css/addcar.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">

</head>

<style>
.bg-image {
    background-image: url('img/paytmbackground.jpg');
    filter: blur(4px);
    -webkit-filter: blur(4px);
    height: 110%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size:auto;
  }
   .bg-text {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0, 0.2); /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    border: 3px solid #f1f1f1;
    position: absolute;
    top: 50%;
    left: 50%;
    bottom:-70%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 100%;
    height: 100%;
    padding: 20px;
    /* text-align: center; */
  }
</style>
<body>
<div class="bg-image"></div>
<div class="bg-text">
    <div class="container" style="margin-top:50px; margin-bottom:60px;">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <h1 style="text-align:center;">PAYMENT VIA PAYTM</h1><br><br>
                <center>
                    <a href="{{url('doPayment')}}"><button type="submit" class=" btn btn-lg btn-primary">Pay via PAYTM</button></a>
                </center>
            </div>
        </div>
    </div>
</div>
</body>
</html>
   