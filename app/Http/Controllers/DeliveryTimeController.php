<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\deliveryTime;
class DeliveryTimeController extends Controller
{
    public function create(){

        return view("city.deliveryTime");
    }
    //
    public function store(Request $request){
        $newtime= new deliveryTime();
        $newtime->city_id= 1;
        $newtime->span= $request -> input('span');
        $newtime->save();
    }
    public function storeA(Request $request,$id){
        $newtime= new deliveryTime();
        $newtime->city_id= $id;
        $newtime->span= $request -> input('span');
        $newtime->save();
    }
}
