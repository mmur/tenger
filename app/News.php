<?php

namespace App;

use App\News;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'description', 'body', 'category', 'language'];
    //
    public $timestamps = true;

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
