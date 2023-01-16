<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    use GetNewsTrait;
    public function index()
    {
        $news = $this->getNews();

        return view('components.news.index', compact('news'));
    }

    public function categories()
    {

        $categories = $this->getCategories();
        return view('components.news.categories', compact('categories'));
    }

    public function show($id)
    {
        return view('components.news.show', ['id' => $id]);
    }
}
