<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PickupTimeController extends Controller
{
    public function index()
    {
        return view('pages.pickuptime');
    }
    // public function store(Request $request){
    //     $start_city=$request['city_name'];
        
    //     return view('pages.pickuptime');
    // }
}
