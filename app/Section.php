<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name', 'content',
    ];

    protected $cast = [
        'content' => 'array',
    ];
}
