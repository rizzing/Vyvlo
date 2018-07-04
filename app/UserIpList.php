<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserIpList extends Model
{
    //public $table = 'user_ip_lists';

    protected $fillable = [
        'user_id',
        'visitor',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
