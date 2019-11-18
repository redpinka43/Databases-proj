<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'time',
        'description',
        'type', 
        'name',
        'event_category',
        'phone_num',
        'email_address'
    ];
}
