<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() : View
    {
       $news = News::all();
        return view('news.index', ['news' => $news]);
    }

    public function show($id): View
    {
        $news = News::findOrFail($id);
        return view('news.show', ['news' => $news]);
    }

    public function category($slug): View
    {
        $news =  Category::where('slug', $slug)->firstOrFail()->news;
        return view('news.index', compact('news'));
    }
}
