<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nombre', 'edad', 'tipo_paciente', 'num_historia_clinica'
    ];
}
