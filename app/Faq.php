<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Faq extends Model
{
    protected $fillable = [
        'active',
        'question',
        'answer'
    ];

    public static function add($data){
        $item= new self();
        return $item->create($data);
    }

    public static function edit($data, $id){
        $marker = self::whereId($id)->first();
        $data = array_filter($data, function($value) { return $value !== ''; });
        return $marker->update($data);
    }

    public static function deleteHelp($id){
        return self::whereId($id)->delete();
    }

}
