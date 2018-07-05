<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = ['contact_phone', 'stat_title', 'en_stat_title', 'slider_id', 'image_id', 'stat1_text', 'stat2_text', 'stat3_text',
        'stat4_text', 'stat5_text', 'en_stat1_text', 'en_stat2_text', 'en_stat3_text', 'en_stat4_text', 'en_stat5_text', 'stat1_number', 'stat2_number',
        'stat3_number', 'stat4_number', 'stat5_number'];

    public $timestamps = true;
}
