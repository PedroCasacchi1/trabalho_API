<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;;

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

Route::get('/tasktrabalho', [TaskController::class, 'index']); // Rota principal
Route::post('/tasktrabalho', [TaskController::class, 'store']); // Enviar para o BD
Route::get('/tasktrabalho/{id}', [TaskController::class, 'show']); // Buscar tarefa
Route::put('tasktrabalho/{id}', [TaskController::class, 'update' ]); // Atualizar tarefa
Route::delete('tasktrabalho/{id}', [TaskController::class, 'destroy']); // Excluir tarefa
