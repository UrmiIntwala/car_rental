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

Route::resource('startingpoint','StartingPointController');

Route::post('/car/fetch','CarController@fetch')->name('car.fetch');

Route::get('/card', ['as' => 'card', 'uses' => 'CardController@index']);
// Route::get('/card','CardController@index');

Route::get('/test','CarController@index');
    


// Route::get('/card',function(){
//     return view('pages.card');
// });