<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Colores;
use App\Cuestionario;
use Auth;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function AllRespuestas()
    {
        return response()->json(['respuestas' => Cuestionario::all()]);
    }

    public function RespuestasPorDia()
    {
        $query = "SELECT COUNT(1) AS resps,
                    DATE(created_at) as date
                    FROM cuestionarios
                    GROUP BY DATE(created_at)
                    LIMIT 0 , 30";
        $resp_por_día = DB::select($query);

        return response()->json(['respuestas' => $resp_por_día]);
    }

    public function FrecuenciaEdades()
    {
        $query = "SELECT COUNT(1) AS cantidad,
                    edad
                    FROM cuestionarios
                    GROUP BY DATE(created_at), edad
                    LIMIT 0 , 30";
        $frec_edades = DB::select($query);

        return response()->json(['respuestas' => $frec_edades]);
    }

    public function FrecuenciaColores()
    {
        $query = "SELECT COUNT(1) AS cantidad,
                    id_color
                    FROM cuestionarios
                    GROUP BY DATE(created_at), id_color
                    LIMIT 0 , 30";
        $frec_color = DB::select($query);

        return response()->json(['respuestas' => $frec_color]);
    }

    public function FrecuenciaColorPorEdad()
    {
        $query = "SELECT COUNT(1) AS cantidad,
                    id_color,
                    edad
                    FROM cuestionarios
                    GROUP BY edad, id_color
                    LIMIT 0 , 30";
        $frec_color = DB::select($query);

        return response()->json(['respuestas' => $frec_color]);
    }
}
