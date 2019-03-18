<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
    protected $fillable = [
        'user_id', 'name', 'description','location','status'
    ];

}
