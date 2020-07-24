<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slot extends Model
{
    use SoftDeletes;

    const NOT_AVAILABLE = 0;
    const AVAILABLE = 1;


    protected $dates = ['deleted_at'];

    protected $fillable = [
        'speaker_id', 'topic_id',
        'day_id', 'start_time',
        'end_time', 'status'
    ];

    public function speaker()
    {
        return $this->belongsTo(Speaker::class, 'speaker_id');
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id');
    }

    public function getStartTimeAttribute($date)
    {
        $d = new DateTime($date);
        return $d->format('h:ia');
    }

    public function getEndTimeAttribute($date)
    {
        $d = new DateTime($date);
        return $d->format('h:ia');
    }

    // public function getDateAttribute($date)
    // {
    //     $d = new DateTime($date);
    //     return $d->format('w F y');
    // }

    public function day()
    {
        return $this->belongsTo(Day::class, 'day_id');
    }
}
