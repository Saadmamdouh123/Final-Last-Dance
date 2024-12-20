<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    //
    protected $fillable =[
        'name',
        'lastName',
        'email',
        'phone',
        'user_id',
        "payment"
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}
}
