<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'text',
        'rating',
        'timestamp',
        'id',
        'event_id'        
    ];

}
