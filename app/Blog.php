<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\FileSystem;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'author',
        'date',
        'description',
        'video',
        'image'
    ];

    public static function add($data){
        $item= new self();

        if(isset($data['image'])) {
            $image_path = FileSystem::updateImage($data['image'], 'images.blog', '');
            $data['image'] = $image_path;
        }

        return $item->create($data);
    }

    public static function edit($data, $id){
        $item = self::whereId($id)->first();

        if(isset($data['image'])) {
            $image_path = FileSystem::updateImage($data['image'], 'images.blog', $item->image);
            $data['image'] = $image_path;
        }

        return $item->update($data);
    }

    public static function deleteBlog($id){
        return self::whereId($id)->delete();
    }

    public static function getPage($page){

    }
}
