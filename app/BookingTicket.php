<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingTicket extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 'phone', 'email',
        'quantity', 'vouchar_id', 'ticket_category_id',
        'seat_numbers',
    ];
}
