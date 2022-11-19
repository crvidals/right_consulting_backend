@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nueva Consulta</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('ingresarconsulta') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="doc" class="col-md-4 col-form-label text-md-right">Doctor</label>
                            <div class="col-md-6">
                                <select name="doc" id="doc" class="form-control">
                                    <option value="1">Doctor Pediatría</option>
                                    <option value="2">Doctor Urgencia</option>
                                    <option value="3">Doctor CGI</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="paciente" class="col-md-4 col-form-label text-md-right">Paciente</label>
                            <div class="col-md-6">
                                <select name="paciente" id="paciente" class="form-control">
                                    @foreach ($pacientes as $p)
                                    <option value="{{ $p->id }}">{{ $p->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tcon" class="col-md-4 col-form-label text-md-right">Tipo Consulta</label>
                            <div class="col-md-6">
                                <select name="tcon" id="tcon" class="form-control">
                                    <option value="1">Pediatría</option>
                                    <option value="2">Urgencia</option>
                                    <option value="3">CGI</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="card-body">
                    @if (session()->get('msj'))
                        <div class="alert alert-info" role="alert">
                            {!! session('msj') !!}
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
@endsection