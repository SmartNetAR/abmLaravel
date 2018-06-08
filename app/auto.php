<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auto extends Model
{
    protected $fillable = [
        'marca', 'model', 'anyo', 'color', 'patente'

    ];
}
