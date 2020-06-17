<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    // fillable: permette scrittura / modifica degli attributi
    protected $fillable = [
        "name",
        "description"
    ];
}
