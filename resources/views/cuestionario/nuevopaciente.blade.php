@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ingresar Paciente</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('ingresarpaciente') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="" required autocomplete="nombre">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="edad" class="col-md-4 col-form-label text-md-right">Edad</label>
                            <div class="col-md-6">
                                <select name="edad" id="edad" class="form-control">
                                    @for ($i = 1; $i < 99; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endfor
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