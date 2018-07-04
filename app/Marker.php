<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'latitude',
        'longitude',
        'description',
    ];

    public static function add($data){
        $marker = new self();
        return $marker->fill($data)->save();
    }

    public static function edit($data, $id){
        $marker = self::whereId($id)->first();
        $data = array_filter($data, function($value) { return $value !== ''; });
        return $marker->update($data);
    }

    public static function deleteMarker($id){
        return self::whereId($id)->delete();
    }
}
