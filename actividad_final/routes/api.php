<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

;
use App\Http\Controllers\AsignaturaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Ruta para listar todas las asignaturas
Route::get('/asignaturas', [AsignaturaController::class, 'index']);

// Ruta para consultar la información de una asignatura en detalle
Route::get('/asignaturas/{id}', [AsignaturaController::class, 'show']);
