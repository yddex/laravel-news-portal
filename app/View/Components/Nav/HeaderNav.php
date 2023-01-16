<?php

namespace App\View\Components\Nav;

use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class HeaderNav extends Component
{
    public $links;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {   
        
        $activeRoute = Route::currentRouteName();
        $this->links = [
            [
                'title' => 'Главная',
                'href' => route('index'),
                'active' => $activeRoute == 'index'
            ],
            [
                'title' => 'Новости',
                'href' => route('news.index'),
                'active' => $activeRoute == 'news.index'
            ],
            [
                'title' => 'Категории',
                'href' => route('news.categories'),
                'active' => $activeRoute == 'news.categories'
            ]

        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.header-nav');
    }
}
