<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sponsor extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'sponsor_category_id', 'name',
        'logo',
    ];

    public function sponsor_category()
    {
        return $this->belongsTo(SponsorCategory::class, 'sponsor_category_id');
    }
}
