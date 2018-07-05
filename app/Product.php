<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title', 'description', 'logo', 'body', 'en_title', 'en_description', 'en_body', 'special'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
