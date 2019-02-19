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
}
