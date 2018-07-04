<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title',
        'heading',
    ];

    public static function edit($data, $name){
        $item = self::where('name', $name)->first();
        $data = array_filter($data, function($value) { return $value !== ''; });
        return $item->update($data);
    }
}
