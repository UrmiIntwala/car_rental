<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/','MainPageController@index');
Auth::routes();

Route::get('/send','CarController@send');

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('dropoff','DropoffTimeController');
Route::get('/dropoff', ['as' => 'dropoff', 'uses' => 'DropoffTimeController@index']);

//Route::resource('startingpoint','StartingPointController');

Route::get('/spoint','StartingPointController@index');

Route::post('/second','StartingPointController@ToSecondPage');

Route::post('/third','StartingPointController@ToThirdPage');

Route::get('/test',function(){
    // return view('pages.startingpoint');
    if (Gate::allows('admin-only', Auth::user())) {
        return view('pages.startingpoint');
    }
    else {
        return 'not authorized';
    }
});

Route::post('/car/fetch','CarController@fetch')->name('car.fetch');

Route::post('/car/location_fetch','CarController@location_fetch')->name('location.fetch');

Route::get('/card', ['as' => 'card', 'uses' => 'CardController@ShowCard']);
Route::get('/tocard','StartingPointController@ToCard');

//Route::get('/test','CarController@index');
 
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/github/facebook', 'Auth\LoginController@handleProviderCallback');

Route::get('/addcar', function () {
    return view('pages.addcar');
});

Route::get('/addcity', function () {
    return view('pages.addcity');
});

Route::get('/addinnercity', function () {
    return view('pages.addinnercity');
});

Route::get('/bookdetails', function () {
    return view('pages.bookdetails');
});

Route::get('/paytmpdf', function () {
    return view('pages.paytmpdf');
});

Route::get('/book','CardController@bookcar');
Route::post('/paytm-callback', 'CardController@paytmCallback');
// Route::get('/card',function(){
//     return view('pages.card');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
