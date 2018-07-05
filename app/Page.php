<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'body', 'hasNews', 'hasProducts', 'hasSlider', 'hasImage', 'order'];
    public $timestamps = true;

    public function news()
    {
        return $this->hasMany('App\News');
    }

    public function products()
    {
        return $this->hasMany('App\Products');
    }
}
