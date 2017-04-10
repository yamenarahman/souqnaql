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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web','auth']], function (){

	Route::resource('shipments','ShipmentController');
});

// Route::get('/', function () {
// 	if (\Auth::guest()) { // try remove /
// 	    return view('welcome');
// 	}
// 	else{
// 		return \Redirect::to('home');
// 	}
// });

Route::get('test',function ()
{
	return Auth::user();	
});