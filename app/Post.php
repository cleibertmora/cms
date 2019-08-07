<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'blog_posts';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'seo_title',
        'seo_description',
        'body'
    ];

    public $timestamps = false;
}
