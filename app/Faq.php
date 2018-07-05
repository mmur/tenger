<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['title', 'description', 'body', 'en_title', 'en_description', 'en_body'];

    public $timestamps = true;

    public function post()
    {
        return $this->belongsTo('App\Product');
    }
}
