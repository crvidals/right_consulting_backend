<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('cuestionario/cuestionario', 'CuestionarioController@index')->name('cuestionario');
Route::post('/cuestionario/respuesta', 'CuestionarioController@ingresarRespuesta')->name('respuesta');

Route::get('/all_respuestas', 'ApiController@AllRespuestas');

Route::get('/respuestas_por_dia', 'ApiController@RespuestasPorDia');

Route::get('/edades', 'ApiController@FrecuenciaEdades');

Route::get('/colores', 'ApiController@FrecuenciaColores');

Route::get('/colores_edad', 'ApiController@FrecuenciaColorPorEdad');

/*Route::get('/pacientes/pacientes', 'PacienteController@index')->name('pacientes');
Route::get('/pacientes/mayorriesgo', 'PacienteController@mayorRiesgo')->name('mayorriesgo');

Route::get('/pacientes/nuevopaciente', 'PacienteController@nuevoPaciente')->name('nuevopaciente');
Route::post('/pacientes/ingresarpaciente', 'PacienteController@ingresarPaciente')->name('ingresarpaciente');

Route::get('/consultas/nuevaconsulta', 'ConsultaController@nuevaConsulta')->name('nuevaconsulta');
Route::post('/consultas/ingresarconsulta', 'ConsultaController@ingresarConsulta')->name('ingresarconsulta');*/