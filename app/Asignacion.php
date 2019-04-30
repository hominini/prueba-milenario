<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table = 'referencias';

    // permitir mass assignment
    protected $guarded = [];

    public $timestamps = false;

}
