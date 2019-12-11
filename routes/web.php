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

Route::get('api','CityController@create');
Route::post('api/city','CityController@store');
Route::get('api/cit','CityContoller@index');



Route::get('api/delivery-times','DeliveryTimeController@create');
Route::post('api/delivery-times','DeliveryTimeController@store');


//Route::post('/api/city/{city_id}/delivery-times','DeliveryTimeController@storA($city_id));
