<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use SoftDeletes;

    const AVAILABLE = 1;
    const NOT_AVAILABLE = 0;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'ticket_category_id', 'seat_number',
        'status',
    ];
}
