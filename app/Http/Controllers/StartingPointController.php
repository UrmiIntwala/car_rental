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
        
        //$start_city=$request['city_name'];
        // session(['start_city' => $request['city_name']]);

        //return session('start_city');

        if($request['city_name']!=null && $request['location_name']!=null && $request['dropcity']!=null)
        {
            session(['start_city' => $request['city_name']]);
            session(['location' => $request['location_name']]);
            session(['drop_city' => $request['dropcity']]);
        }
       // return $request->session()->all();
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
