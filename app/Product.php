<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'body', 'en_title', 'en_description', 'en_body', 'special', 'slider_id', 'faq_id', 'en_category', 'category'];
    public $timestamps = true;

    public function posts()
    {
        return $this->belongsTo('App\Post');
    }
}
