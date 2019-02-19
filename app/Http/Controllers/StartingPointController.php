<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartingPointController extends Controller
{
    public function index()
    {
        return view('pages.startingpoint');
    }

    public function store(Request $request){
        $start_city=$request['city_name'];
        
        return view('pages.pickuptime');
    }

    public function ToSecondPage(Request $request)
    {
        //$start_city=$request['car_name'];
       // return $start_city;
    }
}
