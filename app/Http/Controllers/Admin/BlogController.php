<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\RequestCleaner;
use App\Blog;
use App\Post;

class BlogController extends Controller
{

    use RequestCleaner;

    private $pageName = 'blog';

    private $requestFields = [
        'title',
        'author',
        'date',
        'description',
        'video',
        'image'
    ];

    public function index(){
        return view('dashboard.blog.index', [
            'data' => Post::where('name', $this->pageName)->first()
        ]);
    }

    public function list(){
        return view('dashboard.blog.list', [
            'blog_list' => Blog::all()
        ]);
    }

    public function create(){
        return view('dashboard.blog.create');
    }

    public function update($id){
        $blog = Blog::whereId($id)->first();
        return view('dashboard.blog.edit')->with(['blog'=>$blog]);
    }

    public function createItem(Request $request){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFields);
        $status = Blog::add($cleanRequest);
        if($status) return redirect()->route('blog.list')->with(['status'=>'Create success!']);
        else abort(404);
    }

    public function updateItem(Request $request, $id){
        $cleanRequest = RequestCleaner::cleanRequest($request, $this->requestFields);
        $status = Blog::edit($cleanRequest, $id);
        if($status) return redirect()->back()->with(['status'=>'Update success!']);
        else abort(404);
    }

    public function deleteItem($id){
        $status = Blog::deleteBlog($id);
        if($status) return redirect()->back()->with(['status'=>'Delete success!']);
        else abort(404);
    }
}
