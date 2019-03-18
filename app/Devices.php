<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{

    protected $fillable = [
        'zone_id', 'name', 'description','sensor_type_id','status'
    ];

    public function sensorname()
    {
        return $this->belongsToMany('App\SensorsType');
    }
   
}
