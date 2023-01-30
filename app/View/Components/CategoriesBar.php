<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Ramsey\Collection\Collection;

class CategoriesBar extends Component
{



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.categories-bar');
    }
}
