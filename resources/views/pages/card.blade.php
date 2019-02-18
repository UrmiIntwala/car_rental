@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="img/caricon.png" alt='img'>
        </div>
        <div class="col-6">
            <h3>Mahindra Scorpio</h3><br>
            <div style="margin-top:0;">
                <span class="fa fa-car text-muted" aria-hidden="true"></span>
                <span style="font-size:70%;font-weight:700" class="text-muted">5 Seater</span>|
                <span class="fa fa-suitcase text-muted" aria-hidden="true"></span>
                <span style="font-size:70%;font-weight:700" class="text-muted">5 Bags</span>|
                <span class="fa fa-user text-muted" aria-hidden="true"></span>
                <span style="font-size:70%;font-weight:700" class="text-muted">Age Limit:18+</span>
            </div>
        </div>
        <div class="col-3" style="text-align:right;">
                <span class="fa fa-inr" aria-hidden="true" style="color:green;font-size:80%;"></span>
                <span style="color:green;font-size:120%;">1500</span>
                <br>
                <span class="text-muted" style="font-size:70%;"> Rs11/km </span><br><br>
                <button type="button" class="btn btn-success">Book Now</button>
        </div>  
    </div>
    <div class="row" style="align:center;">  
           <center> <button type="button" style="margin:auto;" id="flip" class="btn btn-primary active">Show More</button></center>
    </div>
    <div class="row" id="panel" style="display:none;">
        hello
    </div>
</div>


@endsection