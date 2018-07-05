<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['title', 'description', 'category', 'body', 'en_title', 'en_description', 'en_body'];

    public $timestamps = true;
}
