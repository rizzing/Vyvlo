<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserActivation extends Model
{
    //public $table = 'user_activations';

    protected $fillable = [
        'user_id',
        'token',
    ];
}
