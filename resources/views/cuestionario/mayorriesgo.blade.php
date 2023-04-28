@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pacientes de Mayor Riesgo</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Nombre</th>
                            <th>Edad</th>
                            <th>¿Fuma?</th>
                            <th>Especialidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Cristian Vidal</th>
                                <th>Edad</th>
                                <th>Si</th>
                                <th>CGI</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection