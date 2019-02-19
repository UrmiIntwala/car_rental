<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\City;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public $start_city,$start_location;

    public function index()
    {
        $query='surat';
        //
        $data=City::where('city_name','like','%'.$query.'%')->get();
      
      //$data=DB::table('cities')->where('city_name','LIKE','%$query%')->get();
       //$data=City::all(); 
       return $data;
    }

    function fetch(Request $request)
    {
        if($request->get('query')){
             $query=$request->get('query');
             //$data=DB::table('App\City')->where('city_name','LIKE','%{$query}%')->get();
          // $data=App/City::where('city_name','like','surat')->get();
          $data=City::where('city_name','like','%'.$query.'%')->get();
            $output='<ul class="dropdown-menu" style="display:block; position:relative">';
            
            foreach($data as $row)
            {
                 $output .= '<li><a href="#">'.$row->city_name.'</a></li>';
                // $output .= '<li>'.$row->city_name.'</li>';
               //  $output .= '<li><a href="#">surat</a></li>';
            }
            $output.='</ul>';
            echo $output;
           //return $output;
        }
    }

    public function ToSecondPage(Request $request)
    {
        $start_city=$request['car_name'];
        return $start_city;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
