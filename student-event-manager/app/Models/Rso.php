<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rso extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'description',
        'name'
    ];
}
