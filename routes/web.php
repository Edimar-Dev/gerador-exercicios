<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('page.index');
Route::post('/gerador-exercicios', [MainController::class, 'gerarExercicios'])->name('gerar.exercicios');
Route::get('/imprimir-exercicios', [MainController::class, 'printExercicios'])->name('imprimir.exercicios');
Route::get('/exportar-exercicios', [MainController::class, 'exportarExercicios'])->name('exportar.exercicios');