<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pacientes/pacientes', 'PacienteController@index')->name('pacientes');
Route::get('/pacientes/mayorriesgo', 'PacienteController@mayorRiesgo')->name('mayorriesgo');

Route::get('/pacientes/nuevopaciente', 'PacienteController@nuevoPaciente')->name('nuevopaciente');
Route::post('/pacientes/ingresarpaciente', 'PacienteController@ingresarPaciente')->name('ingresarpaciente');

Route::get('/consultas/nuevaconsulta', 'ConsultaController@nuevaConsulta')->name('nuevaconsulta');
Route::post('/consultas/ingresarconsulta', 'ConsultaController@ingresarConsulta')->name('ingresarconsulta');