<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GymSession extends Model
{
    //
    protected $fillable = [
        'name',
        'start_time',
        'end_time',
        'capacity',
        'user_id'
    ];
}
