<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attachment extends Model
{
    use HasFactory;

    protected  $fillable = [
        'disk',
        'path',
        'hash',
        'size',
        'news_id',
    ];

    public function news(): belongsTo
    {
        return $this->belongsTo(News::class, 'news_id');
    }
}
