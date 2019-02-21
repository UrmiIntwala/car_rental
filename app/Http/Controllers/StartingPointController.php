<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartingPointController extends Controller
{
    public function index()
    {
        return view('pages.startingpoint');
    }

    public function ToSecondPage(Request $request){
        
        $start_city=$request['city_name'];
        
        return view('pages.pickuptime');
    }

    public function ToThirdPage(Request $request)
    {
        $start_city=$request['car_name'];
        return view('pages.dropofftime');
        //return $start_city;
    }

    public function ToCard(Request $request)
    {
        
    }
    
}
