<?php

namespace App\Http\Controllers;
use App\City;
use App\deliveryTime;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function create(){

        return view("city.create");
    }
    //
    public function store(Request $request){
        $newcity = new City();
        $newcity->name= $request -> input('name');
        $newcity->slug= $request -> input('slug');
        $newcity->save();
    }
    //
    public function index(){
        $cities = City::all();
        dd($cities);
    }


    public function  findById($id, Request $request){
    $city = City::find($id);
      $time = new deliveryTime();
        $time ->span = $request -> input('span');;
             $time-> deliveryTimes() -> save($time);
    }
}
