<?php

namespace App\View\Components\news;

use Illuminate\View\Component;

class Categories extends Component
{

    public array $categories;


    public function __construct(array $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.news.categories');
    }
}
