<?php


use App\Http\Controllers\ReporteController;
use App\Http\Controllers\ActAreaController;
use App\Http\Controllers\ActFijoController;
use App\Http\Controllers\ActActualizacionController;
use App\Http\Controllers\CreCreditoController;
use App\Http\Controllers\CuentCreditoController;





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

   //ACTIVO FIJO
   Route::get('act_fijo', [ActFijoController::class, 'index']);
   Route::get('act_fijo/create', [ActFijoController::class, 'create']);
   Route::post('act_fijo', [ActFijoController::class, 'store']);
   Route::get('act_fijo/{id}/edit', [ActFijoController::class, 'edit']);
   Route::post('act_fijo/actualizar/{id}', [ActFijoController::class, 'update']);
   Route::post('act_fijo/delete/{id}', [ActFijoController::class, 'destroy']);

   //ACTUALIZACIN PRECIO
   Route::get('act_actualizacion', [ActActualizacionController::class, 'index']);
   Route::get('act_actualizacion/create', [ActActualizacionController::class, 'create']);
   Route::post('act_actualizacion', [ActActualizacionController::class, 'store']);
   Route::get('act_actualizacion/{id}/edit', [ActActualizacionController::class, 'edit']);
   Route::post('act_actualizacion/actualizar/{id}', [ActActualizacionController::class, 'update']);
   Route::post('act_actualizacion/delete/{id}', [ActActualizacionController::class, 'destroy']);
   

   //CREDITO
   Route::get('credito', [CreCreditoController::class, 'index']);
   Route::get('credito/create', [CreCreditoController::class, 'create']);
   Route::post('credito', [CreCreditoController::class, 'store']);
   Route::get('credito/{id}/edit', [CreCreditoController::class, 'edit']);
   Route::post('credito/actualizar/{id}', [CreCreditoController::class, 'update']);
   Route::post('credito/delete/{id}', [CreCreditoController::class, 'destroy']);
//    Route::get('calcularMontoMensual', [CreCreditoController::class, 'calcularMontoMensual']);

   Route::get('cuota/{id}', [CreCreditoController::class, 'cuota']);

   //C X C a Credito
   Route::get('cre_cuenta_credito', [CuentCreditoController::class, 'index']);
   Route::get('cre_cuenta_credito/create', [CuentCreditoController::class, 'create']);
   Route::post('cre_cuenta_credito', [CuentCreditoController::class, 'store']);
   Route::get('cre_cuenta_credito/{id}/edit', [CuentCreditoController::class, 'edit']);
   Route::post('cre_cuenta_credito/actualizar/{id}', [CuentCreditoController::class, 'update']);
   Route::post('cre_cuenta_credito/delete/{id}', [CuentCreditoController::class, 'destroy']);
   Route::get('cre_cuenta_credito/{id}', [CuentCreditoController::class, 'show']);
     


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 //REPORTE
 Route::get('reporte', [ReporteController::class, 'index']);
//  Route::get('reporte/searchmascota', [ReporteController::class, 'searchmascota']);
 Route::get('reporte/buscagrupo/{id}', [ReporteController::class, 'buscagrupo']);
    


 Route::get('area', [ActAreaController::class, 'index']);
