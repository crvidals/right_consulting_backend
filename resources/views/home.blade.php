@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Right Consulting</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido '). Auth::user()->name }}

                    <div class="alert alert-success" role="alert">
                        <a class="dropdown-item" href="{{ route('cuestionario') }}">
                            >>> Ir al Cuestionario <<<
                        </a>
                    <div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
