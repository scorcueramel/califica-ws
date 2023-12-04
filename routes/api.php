<?php

use App\Http\Controllers\CalificacionController;
use App\Http\Controllers\VentanillaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('listar-ventanillas', [VentanillaController::class,'carga_ventanillas']);
Route::get('seleccion-ventanilla/{id}', [VentanillaController::class,'seleccion_ventanilla']);
Route::post('calificar',[CalificacionController::class,'calificar']);
