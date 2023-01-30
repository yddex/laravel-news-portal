<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['slug', 'title', 'description'];


    public function news(): belongsToMany
    {
        return $this->belongsToMany(News::class, 'category_news');
    }
}
