@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pacientes</div>

                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <th>
                                    <a href="{{ route('mayorriesgo') }}">Listar Pacientes de Mayor Riesgo</a>
                                </th>
                            </tr>
                            <tr>
                                <th>Atender Pacientes</th>
                            </tr>
                            <tr>
                                <th>Liberar Consultas</th>
                            </tr>
                            <tr>
                                <th>Listar Pacientes Fumadores Urgentes</th>
                            </tr>
                            <tr>
                                <th>Paciente Más Anciano</th>
                            </tr>
                            <tr>
                                <th>Optimizar Atención</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection