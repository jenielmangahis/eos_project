<?php
//Created By Andrian Reyes - Supacoderz
//Helpers Class
//Use functions inside the views
//Same use of eloquent relationship 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\SensorsType;
class Helper {

//Sensors Helper 
public static function SensorName($id){

    $st = SensorsType::where('id','=',$id)->get();
    
    foreach($st as $s){
        return $s->name;
    }


}

}