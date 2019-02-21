<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Car;
class CardController extends Controller
{
    function index()
    {
       
        //return Car::all();
        $car = Car::all();
        return view('pages.card')->with('car', $car);
    }
    public function ShowCard(Request $request)
    {
        $car = Car::all();
        if($request['mydropdate']!=null && $request['drophour']!=null && $request['dropminute']!=null)
        {
            session(['mydropdate' => $request['mydropdate']]);
            session(['drophour' => $request['drophour']]);
            session(['dropminute' => $request['dropminute']]);
            $car = Car::all();
            return view('pages.card')->with('car', $car);
        }
        else {
            return view('pages.dropofftime');
        }
        
    }
}
