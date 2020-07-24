<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketCategory extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'img', 'price', 'limit', 'title',
        'details', 'features',
    ];

    protected $casts = [
        'features' => 'array',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class, 'ticket_category_id');
    }
}
