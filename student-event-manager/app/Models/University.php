<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'website'
    ];

    // public function rooms() {
        // return $this->hasMany('App\Models\Room');
    // }
}
