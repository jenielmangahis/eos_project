<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class THTest extends Model
{
    protected $fillable = [
        'temperature','humidity', 'ph',
    ];
}
