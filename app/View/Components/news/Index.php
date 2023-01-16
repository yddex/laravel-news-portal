<?php

namespace App\View\Components\news;

use Illuminate\View\Component;

class Index extends Component
{
    public array $news;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $news)
    {
        $this->news = $news;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.news.index');
    }
}
