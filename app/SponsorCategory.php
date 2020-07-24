<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SponsorCategory extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title'
    ];

    public function sponsors()
    {
        return $this->hasMany(Sponsor::class, 'sponsor_category_id');
    }
}
