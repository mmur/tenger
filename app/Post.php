<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'body', 'en_title', 'en_description', 'en_body', 'slider_id', 'post_category_id'];
    //
    public $timestamps = true;

    public function products()
    {
        return $this->belongsTo('App\Product');
    }

    public function faq()
    {
        return $this->hasOne('App\Faq');
    }
}
