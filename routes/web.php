<?php

use App\Http\Livewire\Alumnos\EditarAlumnos;
use App\Http\Livewire\Alumnos\ListadoAlumnos;
use App\Http\Livewire\Alumnos\RegistrarAlumnos;
use App\Http\Livewire\Materias\EditarMaterias;
use App\Http\Livewire\Materias\ListadoMaterias;
use App\Http\Livewire\Materias\RegistrarMaterias;
use App\Http\Livewire\Notas\EditarNotas;
use App\Http\Livewire\Notas\ListadoNotas;
use App\Http\Livewire\Notas\RegistrarNotas;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/alumnos/listado', ListadoAlumnos::class)->name('alumnos.listado')->middleware('auth:sanctum');
Route::get('/alumnos/registro', RegistrarAlumnos::class)->name('alumnos.registro')->middleware('auth:sanctum');
Route::get('/alumnos/edicion/{alumno_id}', EditarAlumnos::class)->name('alumnos.edicion')->middleware('auth:sanctum');

Route::get('/materias/listado', ListadoMaterias::class)->name('materias.listado')->middleware('auth:sanctum');
Route::get('/materias/registro', RegistrarMaterias::class)->name('materias.registro')->middleware('auth:sanctum');
Route::get('/materias/edicion/{materia_id}', EditarMaterias::class)->name('materias.edicion')->middleware('auth:sanctum');

Route::get('/notas/listado', ListadoNotas::class)->name('notas.listado')->middleware('auth:sanctum');
Route::get('/notas/registro', RegistrarNotas::class)->name('notas.registro')->middleware('auth:sanctum');
Route::get('/notas/edicion/{nota_id}', EditarNotas::class)->name('notas.edicion')->middleware('auth:sanctum');
