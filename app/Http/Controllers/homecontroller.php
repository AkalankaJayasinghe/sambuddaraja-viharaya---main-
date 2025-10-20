<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->get();
        $photos = Gallery::latest()->take(6)->get();
        return view('home', compact('news', 'photos'));
    }

    public function about()
    {
        return view('about');
    }

    // public function volunteer()
    // {
    //     return view('volunteer');
    // }
}
