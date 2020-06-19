<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // fillable: permette scrittura / modifica degli attributi
    protected $fillable = [
        "name",
        "age",
        "gender",
        "class"
    ];
}
