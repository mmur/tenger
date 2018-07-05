<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title', 'description'];
    public $timestamps = true;

    public function images()
    {
        return $this->hasMany('App\Images');
    }
}
