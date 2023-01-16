<?php

namespace App\View\Components\news;

use Illuminate\View\Component;

class Show extends Component
{
    public int $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.news.show');
    }
}
