<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() : View
    {
        $news = [
            [
                'id' => 1,
                'title' => 'title a',
                'description' => 'description',
                'created_at' => date('d-m-Y'),
                'body' => 'bdoy'
            ],
            [
                'id' => 2,
                'title' => 'title a',
                'description' => 'description',
                'created_at' => date('d-m-Y'),
                'body' => 'bdoy'
            ],
            [
                'id' => 3,
                'title' => 'title a',
                'description' => 'description',
                'created_at' => date('d-m-Y'),
                'body' => 'bdoy'
            ],
            [
                'id' => 4,
                'title' => 'title a',
                'description' => 'description',
                'created_at' => date('d-m-Y'),
                'body' => 'bdoy'
            ]
        ];
        return view('news.index', ['news' => $news]);
    }

    public function show($id)
    {
        $news = [
            'id' => $id,
            'title' => 'title a',
            'description' => 'description',
            'created_at' => date('d-m-Y'),
            'body' => 'bdoy'
        ];
        return view('news.show', ['news' => $news]);
    }
}
