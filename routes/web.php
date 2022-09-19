<?php

use App\Http\Controllers\TipoAlquilerController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\ReporteController;

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\CursoController;



use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    
});

// //TIPO ALQUILER
// Route::get('tipo-alquiler', [TipoAlquilerController::class, 'index']);
// Route::get('tipo-alquiler/create', [TipoAlquilerController::class, 'create']);
// Route::post('tipo-alquiler', [TipoAlquilerController::class, 'store']);
// Route::get('tipo-alquiler/{id}/edit', [TipoAlquilerController::class, 'edit']);
// Route::post('tipo-alquiler/actualizar/{id}', [TipoAlquilerController::class, 'update']);
// Route::post('tipo-alquiler/delete/{id}', [TipoAlquilerController::class, 'destroy']);
//  //ALQUILER
//  Route::get('alquiler', [AlquilerController::class, 'index']);
//  Route::get('alquiler/create', [AlquilerController::class, 'create']);
//  Route::post('alquiler', [AlquilerController::class, 'store']);
//  Route::get('alquiler/{id}/edit', [AlquilerController::class, 'edit']);
//  Route::post('alquiler/actualizar/{id}', [AlquilerController::class, 'update']);
//  Route::post('alquiler/delete/{id}', [AlquilerController::class, 'destroy']);

//    //Raza
//    Route::get('raza', [RazaController::class, 'index']);
//    Route::get('raza/create', [RazaController::class, 'create']);
//    Route::post('raza', [RazaController::class, 'store']);
//    Route::get('raza/{id}/edit', [RazaController::class, 'edit']);
//    Route::post('raza/actualizar/{id}', [RazaController::class, 'update']);
//    Route::post('raza/delete/{id}', [RazaController::class, 'destroy']);
     
//    Route::get('raza/buscarespecie/{id}', [MascotaController::class, 'buscarespecie']);
 
 
//  //Mascota
//   Route::get('mascota', [MascotaController::class, 'index']);
// Route::get('mascota/create', [MascotaController::class, 'create']);
// Route::post('mascota', [MascotaController::class, 'store']);
// //   Route::get('alquiler/{id}/edit', [AlquilerController::class, 'edit']);
// //   Route::post('alquiler/actualizar/{id}', [AlquilerController::class, 'update']);
//   Route::post('mascota/delete/{id}', [MascotaController::class, 'destroy']);
// // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('mascota/buscaraza/{id}', [MascotaController::class, 'searchraza']);


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //ALUMNO
// Route::get('alumno', [AlumnoController::class, 'index']);
//  Route::get('alumno/create', [AlumnoController::class, 'create']);
//  Route::post('alumno', [AlumnoController::class, 'store']);
//  Route::get('alumno/{id}/edit', [AlumnoController::class, 'edit']);
//  Route::post('alumno/actualizar/{id}', [AlumnoController::class, 'update']);
//  Route::post('alumno/delete/{id}', [AlumnoController::class, 'destroy']);
 
//  //PROFESOR
//  Route::get('profesor', [ProfesorController::class, 'index']);
//  Route::get('profesor/create', [ProfesorController::class, 'create']);
//  Route::post('profesor', [ProfesorController::class, 'store']);
//  Route::get('profesor/{id}/edit', [ProfesorController::class, 'edit']);
//  Route::post('profesor/actualizar/{id}', [ProfesorController::class, 'update']);
//  Route::post('profesor/delete/{id}', [ProfesorController::class, 'destroy']);
 
 
//  //MATERIA
//  Route::get('materia', [MateriaController::class, 'index']);
//  Route::get('materia/create', [MateriaController::class, 'create']);
//  Route::post('materia', [MateriaController::class, 'store']);
//  Route::get('materia/{id}/edit', [MateriaController::class, 'edit']);
//  Route::post('materia/actualizar/{id}', [MateriaController::class, 'update']);
//  Route::post('materia/delete/{id}', [MateriaController::class, 'destroy']);
 
//  //NIVEL
//  Route::get('nivel', [NivelController::class, 'index']);
//  Route::get('nivel/create', [NivelController::class, 'create']);
//  Route::post('nivel', [NivelController::class, 'store']);
//  Route::get('nivel/{id}/edit', [NivelController::class, 'edit']);
//  Route::post('nivel/actualizar/{id}', [NivelController::class, 'update']);
//  Route::post('nivel/delete/{id}', [NivelController::class, 'destroy']);
 
//  //ALUMNO
//  Route::get('inscripcion', [InscripcionController::class, 'index']);
//  Route::get('inscripcion/create', [InscripcionController::class, 'create']);
//  Route::post('inscripcion', [InscripcionController::class, 'store']);
//  Route::get('inscripcion/{id}/edit', [InscripcionController::class, 'edit']);
//  Route::post('inscripcion/actualizar/{id}', [InscripcionController::class, 'update']);
//  Route::post('inscripcion/delete/{id}', [InscripcionController::class, 'destroy']); 
//  Route::get('inscripcion/buscarmateria/{id}', [InscripcionController::class, 'buscarmateria']);
 
//  //CURSO
//  Route::get('curso', [CursoController::class, 'index']);
//  Route::get('curso/create', [CursoController::class, 'create']);
//  Route::post('curso', [CursoController::class, 'store']);
//  Route::get('curso/{id}/edit', [CursoController::class, 'edit']);
//  Route::post('curso/actualizar/{id}', [CursoController::class, 'update']);
//  Route::post('curso/delete/{id}', [CursoController::class, 'destroy']); 
//  Route::get('curso/buscarmateria/{id}', [CursoController::class, 'buscarmateria']);
//  Route::get('curso/buscaralumno/{id}', [CursoController::class, 'buscaralumno']);
 
 //REPORTE
 Route::get('reporte', [ReporteController::class, 'index']);
//  Route::get('reporte/searchmascota', [ReporteController::class, 'searchmascota']);
 Route::get('reporte/buscagrupo/{id}', [ReporteController::class, 'buscagrupo']);
    