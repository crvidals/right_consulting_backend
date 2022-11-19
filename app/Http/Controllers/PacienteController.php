<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Paciente;

use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pacientes/pacientes');
    }

    public function nuevoPaciente()
    {
        return view('pacientes/nuevopaciente');
    }

    public function ingresarPaciente(Request $request)
    {
        //1->anciano 2-niño 3->joven
        $edad = $request->input('edad');
        if ($edad <= 15) {
            $tipo = 2;
        } elseif ($edad > 15 && $edad <= 40) {
            $tipo = 3;
        } else {
            $tipo = 1;
        }
        //echo "EDAD=>".$edad."<br>TIPO=> ".$tipo;
        $paciente = Paciente::create([
            'nombre' => $request->input('nombre'),
            'edad' => $edad,
            'tipo_paciente' => $tipo,
            'num_historia_clinica' => 1,
        ]);
        $request->session()->flash('msj', 'Paciente ingresado correctamente.');
        return redirect('pacientes/nuevopaciente');
        //return view('');
    }

    public function mayorRiesgo()
    {
        return view('pacientes/mayorriesgo');
    }

}