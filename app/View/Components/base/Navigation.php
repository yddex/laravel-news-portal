<?php

namespace App\View\Components\base;

use Illuminate\View\Component;

class Navigation extends Component
{

    public array $links;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($links = [])
    {
        if(!count($links))
        {
            $this->links = [
                [
                    'title' => 'Главная',
                    'href' => route('index')
                ],
                [
                    'title' => 'Новости',
                    'href' => route('news.index')
                ]
            ];
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.base.navigation');
    }
}
