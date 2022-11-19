<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = [
        'cntPcnts', 'NomEsp', 'tipoCons', 'estado'
    ];
}
