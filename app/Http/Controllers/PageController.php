<?php

namespace App\Http\Controllers;

use App\Post;

class PageController extends Controller
{
    private $termsPageName = 'terms';
    private $privacyPageName = 'privacy';

    public function terms()
    {
        return view('pages.terms', [
            'data' => Post::where('name', $this->termsPageName)->first()
        ]);
    }

    public function policy()
    {
        return view('pages.privacy', [
            'data' => Post::where('name', $this->privacyPageName)->first()
        ]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function subscribe()
    {
        return view('pages.subscribe');
    }
}
