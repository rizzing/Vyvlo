<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Post;

class BlogController extends Controller
{
    private $pageName = 'blog';

    public function index()
    {
        $per_page = 3;
        $count = Blog::all()->count();
        $pages = ceil($count/$per_page)*1;
        return view('pages.blog', [
            'blog_list' => Blog::paginate($per_page),
            'pages' => $pages,
            'data' => Post::where('name', $this->pageName)->first()
        ]);
    }

    public static function getPage(Request $request){
        $per_page = 3;
        $page = $request->get('page');
        $blog = Blog::paginate($per_page, ['*'], 'page', $page);
        return response()
            ->json([
                'blog'=>$blog,
                'page' => $page,
                'img_path' => asset(config('images.blog.middle.public_path'))
            ]);
    }
}
