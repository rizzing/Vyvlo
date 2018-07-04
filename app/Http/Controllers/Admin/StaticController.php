<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;

class StaticController extends Controller
{

    private $termsPageName = 'terms';
    private $privacyPageName = 'privacy';

    public function terms(){
        return view('dashboard.static.terms', [
            'data' => Post::where('name', $this->termsPageName)->first()
        ]);
    }

    public function privacy(){
        return view('dashboard.static.privacy', [
            'data' => Post::where('name', $this->privacyPageName)->first()
        ]);
    }
}
