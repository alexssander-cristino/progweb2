<?php

use App\Http\Controllers\IMCController;
use App\Http\Controllers\SonoController;
use App\Http\Controllers\ViagemController;

Route::get('/', function() {
    return view('index');
});

Route::get('/imc', [IMCController::class, 'index'])->name('imc.form'); // Rota do formulário
Route::post('/imc/calcular', [IMCController::class, 'calcularIMC'])->name('calcular.imc'); // Rota do cálculo IMC


Route::get('/sono', [SonoController::class, 'index'])->name('sono.form');
Route::post('/sono/avaliar', [SonoController::class, 'avaliarSono'])->name('avaliar.sono');

Route::get('/viagem', [ViagemController::class, 'index'])->name('viagem.form');
Route::post('/viagem/calcular', [ViagemController::class, 'calcularGasto'])->name('calcular.viagem');

