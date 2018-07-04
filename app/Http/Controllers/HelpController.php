<?php

namespace App\Http\Controllers;

use App\Help;
use App\Post;

class HelpController extends Controller
{
    private $pageName = 'help';

    public function index()
    {
        return view('pages.help', [
            'help_list' => Help::all(),
            'data' => Post::where('name', $this->pageName)->first()
        ]);
    }
}
