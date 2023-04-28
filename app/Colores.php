<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colores extends Model
{
    protected $fillable = [
        'nombre', 'codigo_hexadecimal',
    ];
}