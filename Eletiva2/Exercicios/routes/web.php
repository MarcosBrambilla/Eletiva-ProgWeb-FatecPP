<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exer1', [ExerciciosController::class, 'abrirFormExer1']);
Route::post('/exer1resp', [ExerciciosController::class, 'respostaExer1']);

Route::get('/exer2', [ExerciciosController::class, 'abrirFormExer2']);
Route::post('/exer2resp', [ExerciciosController::class, 'respostaExer2']);

Route::get('/exer3', [ExerciciosController::class, 'abrirFormExer3']);
Route::post('/exer3resp', [ExerciciosController::class, 'respostaExer3']);

Route::get('/exer4', [ExerciciosController::class, 'abrirFormExer4']);
Route::post('/exer4resp', [ExerciciosController::class, 'respostaExer4']);

Route::get('/exer5', [ExerciciosController::class, 'abrirFormExer5']);
Route::post('/exer5resp', [ExerciciosController::class, 'respostaExer5']);

Route::get('/exer6', [ExerciciosController::class, 'abrirFormExer6']);
Route::post('/exer6resp', [ExerciciosController::class, 'respostaExer6']);

Route::get('/exer7', [ExerciciosController::class, 'abrirFormExer7']);
Route::post('/exer7resp', [ExerciciosController::class, 'respostaExer7']);
