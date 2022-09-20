<?php


use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ActAreaController;
use App\Http\Controllers\ActFijoController;


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

   //ACTIVO FIJO
   Route::get('act_fijo', [ActFijoController::class, 'index']);
   Route::get('act_fijo/create', [ActFijoController::class, 'create']);
   Route::post('act_fijo', [ActFijoController::class, 'store']);
   Route::get('act_fijo/{id}/edit', [ActFijoController::class, 'edit']);
   Route::post('act_fijo/actualizar/{id}', [ActFijoController::class, 'update']);
   Route::post('act_fijo/delete/{id}', [ActFijoController::class, 'destroy']);
     
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 //REPORTE
 Route::get('reporte', [ReporteController::class, 'index']);
//  Route::get('reporte/searchmascota', [ReporteController::class, 'searchmascota']);
 Route::get('reporte/buscagrupo/{id}', [ReporteController::class, 'buscagrupo']);
    


 Route::get('area', [ActAreaController::class, 'index']);
