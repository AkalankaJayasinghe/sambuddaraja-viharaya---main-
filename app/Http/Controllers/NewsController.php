<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $featuredNews = News::where('is_featured', true)
            ->latest()
            ->take(2)
            ->get();

        $news = News::latest()
            ->paginate(12);

        return view('news.index', compact('news', 'featuredNews'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);

        // Increment view count
        $news->increment('views');

        // Get related news
        $relatedNews = News::where('id', '!=', $id)
            ->where(function($query) use ($news) {
                if ($news->category) {
                    $query->where('category', $news->category);
                }
            })
            ->latest()
            ->take(3)
            ->get();

        // Get recent news for sidebar
        $recentNews = News::where('id', '!=', $id)
            ->latest()
            ->take(5)
            ->get();

        // Get previous and next news
        $previousNews = News::where('id', '<', $id)->orderBy('id', 'desc')->first();
        $nextNews = News::where('id', '>', $id)->orderBy('id', 'asc')->first();

        return view('news.show', compact('news', 'relatedNews', 'recentNews', 'previousNews', 'nextNews'));
    }
}
