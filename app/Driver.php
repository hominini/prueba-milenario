<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    // permitir mass assignment
    protected $guarded = [];

    public $timestamps = false;
}
