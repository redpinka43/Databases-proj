<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rso_owns_ev extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'rso_id',
        'event_id'
    ];
}
