<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\AtrasoController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\PeriodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aqui você pode registrar rotas para a API de sua aplicação. Estas rotas
| são carregadas pelo RouteServiceProvider dentro de um grupo que é
| atribuído ao middleware "api". Aproveite para construir sua API!
|
*/

// Rota para obter informações do usuário autenticado
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Grupo de rotas para cursos
Route::prefix('curso')->group(function () {
    Route::get('/', [CursoController::class, 'index']);
});

Route::get('/atraso', [AtrasoController::class, 'index']);

Route::get('/periodo', [PeriodoController::class, 'index']);

Route::get('/modulo', [ModuloController::class, 'index']);


Route::post('/curso', [CursoController::class, 'store']);

Route::post('/atraso', [AtrasoController::class, 'store']);

Route::post('/periodo', [PeriodoController::class, 'store']);

Route::post('/modulo', [ModuloController::class, 'store']);


