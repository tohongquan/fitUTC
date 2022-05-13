<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'summary',
        'content',
        'article_category_id',
        'author_id',
    ];
    /**
     * Get the category that owns the article.
     */
    public function category()
    {
        return $this->belongsTo(Article_category::class);
    }

    //
    /**
     * Get the author that owns the article.
     */
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
