<?php

namespace App\View\Components\News;

use Illuminate\View\Component;
use Illuminate\View\View;

class Card extends Component
{
    public $news;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($news)
    {
        $this->news = $news;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() :View
    {
        return view('components.news.card');
    }
}
