<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\RequestCleaner;
use App\Post;

class PostController extends Controller
{
    private $requestFaqFields = [
        'title',
        'heading',
    ];

    public function edit(Request $request, $name){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFaqFields);
         $status= Post::edit($cleanRequest, $name);
        if($status) return redirect()->back()->with(['status'=>'Update success!']);
        else abort(404);
    }
}
