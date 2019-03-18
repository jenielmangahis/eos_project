<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    protected $fillable = [
        'user_id', 'name', 'description','house_id','status'
    ];
}
