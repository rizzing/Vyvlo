<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Faq;
use App\Post;

class MainController extends Controller
{

    private $pageName = 'main';

    public function index()
    {
        return view('pages.index', [
            'faq_list' => Faq::all(),
            'data' => Post::where('name', $this->pageName)->first()
        ]);
    }
}
