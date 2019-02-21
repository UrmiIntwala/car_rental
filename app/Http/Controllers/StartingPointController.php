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

        if($request['city_name']!=null && $request['location_name']!=null)
        {
            session(['start_city' => $request['city_name']]);
            session(['location' => $request['location_name']]);
            if($request['dropcity']!=null){
            session(['drop_city' => $request['dropcity']]);
            }
            session(['drop_city'=>null]);
            return view('pages.pickuptime');
        }
        else
         {
            return view('pages.startingpoint');
        }
       // return $request->session()->all();
        
    }

    public function ToThirdPage(Request $request)
    {
        //$start_city=$request['car_name'];
        //return view('pages.dropofftime');
        //return $start_city;
        if($request['mydate']!=null && $request['hour']!=null && $request['minute']!=null)
        {
            session(['mydate' => $request['mydate']]);
            session(['hour' => $request['hour']]);
            session(['minute' => $request['minute']]);
            return view('pages.dropofftime');
        }
        else {
            return view('pages.pickuptime');
        }
    }

    public function ToCard(Request $request)
    {
        
    }
    
}
