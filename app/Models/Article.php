<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use \Encore\Admin\Traits\Resizable;
    use HasFactory;
    protected $table = 'articles';
    protected $fillable = [
        'title',
        'summary',
        'content',
        'image',
        'category_id',
        'author_id',
    ];
    /**
     * Get the category that owns the article.
     */
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //
    /**
     * Get the author that owns the article.
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
