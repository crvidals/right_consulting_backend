<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Paciente;
use App\Consulta;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('consultas/consulta');
    }

    public function nuevaConsulta()
    {
        $pacientes = Paciente::all();
        return view('consultas/nuevaconsulta', ['pacientes' => $pacientes]);
    }

    public function ingresarConsulta(Request $request)
    {
        echo $request->input('doc');
        $paciente = Consulta::create([
            'cntPcnts' => 8,
            'NomEsp' => $request->input('doc'),
            'tipoCons' => $request->input('tcon'),
            'estado' => 1,
        ]);
        $request->session()->flash('msj', 'Consulta ingresada correctamente.');
        return redirect('consultas/nuevaconsulta');
        //return view('');
    }

}