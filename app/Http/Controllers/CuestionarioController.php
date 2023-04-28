<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Colores;
use App\Cuestionario;
use Auth;

use Illuminate\Http\Request;

class CuestionarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $colores = Colores::all();
        //dd($colores);
        return view('cuestionario/cuestionario', ['colores' => $colores]);
        //return view('cuestionario/cuestionario');
    }

    public function ingresarRespuesta(Request $request)
    {

        $resp = Cuestionario::updateOrCreate(
            [
                'id_user'   => Auth::user()->id,
            ],
            [
                'id_user'     => Auth::user()->id,
                'edad' => $request->input('edad'),
                'id_color'    => $request->input('id_color')
            ]
        );

        /*$resp = Cuestionario::create([
            'id_user' => Auth::user()->id,
            'edad' => $request->input('edad'),
            'id_color' => $request->input('id_color'),
        ]);*/
        $request->session()->flash('msj', 'Respuesta ingresada correctamente.');
        return redirect('cuestionario/cuestionario');

    }

}