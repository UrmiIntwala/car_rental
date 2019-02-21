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

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('dropoff','DropoffTimeController');
Route::get('/dropoff', ['as' => 'dropoff', 'uses' => 'DropoffTimeController@index']);

//Route::resource('startingpoint','StartingPointController');

Route::get('/spoint','StartingPointController@index');

Route::post('/second','StartingPointController@ToSecondPage');

Route::post('/third','StartingPointController@ToThirdPage');

// Route::get('/mycard','CardController@index');

Route::post('/car/fetch','CarController@fetch')->name('car.fetch');

Route::post('/location/fetch','CarController@location_fetch')->name('location.fetch');

Route::get('/card', ['as' => 'card', 'uses' => 'CardController@index']);
Route::get('/tocard','StartingPointController@ToCard');

//Route::get('/test','CarController@index');
    


// Route::get('/card',function(){
//     return view('pages.card');
// });