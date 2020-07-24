<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Day extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'day_of_week', 'date',
    ];

    public function slots()
    {
        return $this->hasMany(Slot::class, 'day_id');
    }
}
