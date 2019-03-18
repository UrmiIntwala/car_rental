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
    return view('pages.frontpage');
});

Route::get('/welcome',function(){
    return view('welcome');
});

Route::get('/facebook',function(){ return view('facebook');});
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

Route::get('/video',function(){
    return view('pages.frontpage');
});

Route::post('/car/fetch','CarController@fetch')->name('car.fetch');

Route::post('/car/location_fetch','CarController@location_fetch')->name('location.fetch');

Route::get('/card', ['as' => 'card', 'uses' => 'CardController@ShowCard']);
Route::get('/tocard','StartingPointController@ToCard');

//Route::get('/test','CarController@index');
 
// Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
// Route::get('auth/github/facebook', 'Auth\LoginController@handleProviderCallback');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/addcar', function(){
    // return view('pages.startingpoint');
    if (Gate::allows('admin-only', Auth::user())) {
        return view('pages.addcar');
    }
    else {
        return 'not authorized';
    }
});

Route::get('/addcity',function(){
    // return view('pages.startingpoint');
    if (Gate::allows('admin-only', Auth::user())) {
        return view('pages.addcity');
    }
    else {
        return 'not authorized';
    }
});

Route::get('/addinnercity', function(){
    // return view('pages.startingpoint');
    if (Gate::allows('admin-only', Auth::user())) {
        return view('pages.addinnercity');
    }
    else {
        return 'not authorized';
    }
});

Route::get('updatecar',function(){
    if (Gate::allows('admin-only', Auth::user())) {
        return view('pages.updatecar');
    }
    else {
        return 'not authorized';
    }
});

Route::get('deletecar',function(){
    if (Gate::allows('admin-only', Auth::user())) {
        return view('pages.deletecar');
    }
    else {
        return 'not authorized';
    }
});


Route::post('/city', 'CarController@addcity');
Route::post('/car', 'CarController@addcar');
Route::post('/addinnercity','CarController@addinnercity');
Route::get('/bookdetails', function () {
    return view('pages.bookdetails');
});
Route::post('/updatecar','CarController@updatecar');
Route::post('/deleteecar','CarController@deletecar');

Route::post('/booking_details','CardController@booking_details');
// Route::get('/book','CardController@bookcar');
// Route::post('/booking_details','CardController@booking_details');
// Route::post('/booking_details',function(){
//     return 'hello';
//  });
Route::get('/doPayment','CardController@doPayment');
Route::get('/paytmpdf', function () {
    return view('pages.paytmpdf');
});


Route::get('/chart','CarController@showchart');

Route::get('/book','CardController@bookcar');
Route::post('/paytm-callback', 'CardController@paytmCallback');
// Route::get('/card',function(){
//     return view('pages.card');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/done_payment','CardController@to_ticket');
Route::get('/download_ticket','CardController@pdf');
Route::get('/ticket',function(){
    return view('pages.ticket');
});
Route::get('/test','CardController@test');
Route::get('/from_book_button','CardController@from_book_button');
Route::get('/from_user_info','CardController@from_user_info');
Route::post('/donepayment','CardController@donePayment');
