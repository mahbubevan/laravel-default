<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable = [
        'title', 'logo',
        'start_date', 'end_date',
        'latitude', 'longitude',
        'social_icons'
    ];
}
