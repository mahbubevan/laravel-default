<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'sponsor_category_id', 'name',
        'logo',
    ];

    public function sponsor_category()
    {
        return $this->belongsTo(SponsorCategory::class, 'sponsor_category_id');
    }
}
