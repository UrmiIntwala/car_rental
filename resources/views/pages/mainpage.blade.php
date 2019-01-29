@extends('layouts.app')

@section('content')
<div style="background-image:url(img/car.jpg) ;width:122%; margin-left:-117px;">
            <p style="text-align:center;color:white;font-size:300%;font-weight:600;padding-top:10%;">DRIVE IN THE CITY AND OUTSTATION<p>
            <p style="text-align:center;color:white;font-size:150%;font-weight:500">
                Self Drive Car Rental in <select style="color:black" name="city">
                    <option value="surat">Surat</option>
                    <option value="ahmedabad">Ahmedabad</option>
                    <option value="mumbai">Mumbai</option>
                    <option value="pune">Pune</option>
                    <option value="vadodra">Vadodra</option>
                  </select>
            </p>
            <center>
            <button type="button" class="btn btn-block btn-lg" 
                style="width:50%;margin-top:3%;text-align:left;height:50px;">
               <a href="cars"> Start your wonderful journey
                   <span style="float: right;" class="glyphicon glyphicon-chevron-right">
                </a>
            </button>
            </center>   
            <br>
            <center>
            <div style="color:white;">
                <span class="glyphicon glyphicon-briefcase" style="font-size:200%;"></span>
                <span style="font-size:120%;font-weight:700">LAGOON COMMUTE</span>&nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-time" style="font-size:200%;"></span>
                <span style="font-size:120%;font-weight:700">DEAL SHACK</span>&nbsp;&nbsp;&nbsp;
                <span class="glyphicon glyphicon-star-empty" style="font-size:200%;"></span>
                <span style="font-size:120%;font-weight:700">OFFERS</span>
            </div>
            </center>
            <br><br><br>
            <div>
                <center>
                    <button type="button" class="btn  btn-lg"
                    style="background-color:white;width:600px">
                    <div class="col-sm-5">
                        <img src="img/caricon.png" style="height:120px;">
                    </div>
                    <div class="col-sm-7">
                        <h3 style="color:green">SUBSCRIBE</h3><br>
                        Get a hazzle free car for 6 to 24 months
                    </div>
                    </button>
                </center>
            </div>
        </div>

@endsection