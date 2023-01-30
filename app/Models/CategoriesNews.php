<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoriesNews extends Pivot
{
    public $incrementing = true;

    protected $fillable = ['category_id', 'news_id'];
}
