<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'stage_name',
    ];
    /**
     * Get the article category for the article.
     */
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
