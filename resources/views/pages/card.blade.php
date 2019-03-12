@extends('layouts.app')

@section('content')
{{-- <div class="container">
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
</div> --}}

<div class="container">
        @if(count($car)>0)
        @foreach($car as $cars)
        {{-- <form action="bookdetails" method="get"> --}}
        <form action="from_book_button" method="GET">
        <div class="row">
                <div class="col-3">
                <img src={{$cars->path}} alt='img'>
                </div>
       
            <div class="col-6">
            <h3>{{$cars->car_name}}</h3><br>
            <input type="text" name="car_name" id="car_name" value={{$cars->car_name}} style="display:none;">
            <input type="text" name="seat" id="seat" value={{$cars->seat}} style="display:none;">
            <input type="text" name="bag" id="bag" value={{$cars->bags}} style="display:none;">
            <input type="text" name="price" id="price" value={{$cars->price}} style="display:none;">
            <input type="text" name="km_price" id="km_price" value={{$cars->km_price}} style="display:none;">
            <input type="text" name="plate_no" id="plate_no" value={{$cars->plate_no}} style="display:none;">
                <div style="margin-top:0;">
                    <span class="fa fa-car text-muted" aria-hidden="true"></span>
                    <span style="font-size:70%;font-weight:700" class="text-muted">{{$cars->seat}} Seater</span>|
                    <span class="fa fa-suitcase text-muted" aria-hidden="true"></span>
                    <span style="font-size:70%;font-weight:700" class="text-muted">{{$cars->bags}} Bags</span>|
                    <span class="fa fa-user text-muted" aria-hidden="true"></span>
                    <span style="font-size:70%;font-weight:700" class="text-muted">Age Limit:18+</span>|
                <span style="font-size:70%;font-weight:700" class="text-muted">Plate No{{$cars->plate_no}}</span>
                </div>
            </div>
            <div class="col-3" style="text-align:right;">
                    <span class="fa fa-inr" aria-hidden="true" style="color:green;font-size:80%;"></span>
            <span style="color:green;font-size:120%;">{{$cars->price}}</span>
                    <br>
            <span class="text-muted" style="font-size:70%;"> Rs{{$cars->km_price}}/km </span><br><br>
                    <button type="submit" class="btn btn-success">Book Now</button>
            </div>  
        </div>
        <div class="row" style="align:center;">  
            <center> <button type="button" style="margin:auto;" id="flip" class="btn btn-primary active">Show More</button></center>
        </div>
        <div class="row" id="panel" style="display:none;">
            hello
        </div>
    </form>
        @endforeach
        <br>
        {{-- {{ $car->links() }}</div> --}}
    @else
        <p>No cars</p>
    @endif
</div>


@endsection