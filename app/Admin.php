<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    protected $guarded = ['id'];

    protected $fillable = [
        'name', 'email', 'password', 'img',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
