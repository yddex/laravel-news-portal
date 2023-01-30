<?php

namespace App\View\Composers;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;


class CategoryBarComposer
{

    public function compose(View $view): void
    {
        $view->with('categories', $this->getCategories());
    }


    protected function getCategories() :Collection
    {
        return Category::all();
    }
}
