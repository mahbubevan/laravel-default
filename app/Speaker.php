<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Speaker extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'designation', 'bio', 'img', 'name'
    ];


    public function slots()
    {
        return $this->hasMany(Slot::class, 'speaker_id');
    }
}
