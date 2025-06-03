<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'article_title',
        'article_description',
        'user_id',
        'article_path',
        'article_image_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public function getArticleImagePathAttribute($value)
    // {
    //     return $value ? asset('storage/' . $value) : null;
    // }
    // public function getArticlePathAttribute($value)
    // {
    //     return $value ? asset('storage/' . $value) : null;
    // }
}
