<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'body', 'hasNews', 'hasProducts', 'hasSlider', 'hasImage', 'hasSubMenu', 'order'];


    public $timestamps = true;
}
