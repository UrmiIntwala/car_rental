<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\City;
use App\Location;
use App\Car;
use Mail;
use App\Mail\sendMail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
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
        //   $data=App/City::where('city_name','like','surat')->get();
          $data=City::where('city_name','like','%'.$query.'%')->get();
        //   $data=Location::all();
            $output='<ul class="dropdown-menu" style="display:block; position:relative">';
            //$output .= '<li><a href="#">hey hey</a></li>';
            foreach($data as $row)
            {
                 $output .= '<li><a href="#">'.$row->city_name.'</a></li>';
                // $output .= '<li>'.$row->city_name.'</li>';
                //$output .= '<li><a href="#">surat</a></li>';
            }
            $output.='</ul>';
            echo $output;
           //return $output;
        }
    }

    public function location_fetch(Request $request)
    {
        if($request->get('query')){
            $query=$request->get('query');
            //$data=DB::table('App\City')->where('city_name','LIKE','%{$query}%')->get();
         // $data=App/City::where('city_name','like','surat')->get();
       $data=Location::where('location_name','like','%'.$query.'%')->get();
           $output='<ul class="dropdown-menu" style="display:block; position:relative">';
        //    $data=Location::all();
           foreach($data as $row)
           {
                $output .= '<li><a href="#">'.$row->location_name.'</a></li>';
               // $output .= '<li>'.$row->city_name.'</li>';
              //  $output .= '<li><a href="#">surat</a></li>';
           }
           $output.='</ul>';
           echo $output;
          //return $output;
       }
    }

    /*public function ToSecondPage(Request $request)
    {
        $start_city=$request['car_name'];
        return $start_city;
    }*/

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

    public function send()
    {
        // Mail::send(['text'=>'mail'],['name','jaimit'],function($message){
        //     $message->to('intwalaurmi@gmail.com','To Urmi')->subject('Warning');
        //     $message->from('jaimitgandhi9@gmail.com','Jaimit');
        // });
        Mail::send(new sendMail());
    }

    public function addcar(Request $request)
    {
        
        $car = new Car();
        $car->car_name=$request['car_name'];
        $car->seat=$request['seater'];
        $car->plate_no=$request['plate_no'];
        $car->km_price=$request['price_per_km'];
        $car->price=$request['price'];
        $car->bags=$request['air_bag'];
        $car->path=$request['img_path'];
        $car->number=1;
        $car->city=$request['city'];
        $car->save();
        $flag=1;
        return view('pages.addcar')->with('flag',$flag);
    }

    public function addcity(Request $request)
    {
        $city=new City();
        $city->city_name=$request['city'];
        $city->save();
        $flag=1;
        return view('pages.addcity')->with('flag',$flag);
    }

    public function addinnercity(Request $request)
    {
        $location=new Location();
        $location->location_name=$request['place'];
        $location->save();
        $flag=1;
        return view('pages.addinnercity')->with('flag',$flag);
    }
}
