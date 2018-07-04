<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIpActivation extends Model
{
    protected $fillable = [
        'user_id',
        'token',
        'visitor',
    ];
}
