<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use PhpParser\Node\Expr\Array_;


/**
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property  string $content
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 *
 */
class News extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $with = ['user'];
    protected $fillable = ['title', 'description','content', 'user_id',];



    public function user(): belongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories() :belongsToMany
    {
        return $this->belongsToMany(Category::class, 'category_news');
    }

    public function categoriesIdx()
    {
        return $this->categories()->pluck('category_id');
    }

    public function attachments(): hasMany
    {
        return $this->hasMany(Attachment::class);
    }


}
