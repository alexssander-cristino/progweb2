<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ParticipanteController;

Route::get('/', function () {
    return redirect()->route('home');
});

Route::resource('eventos', EventoController::class);
Route::resource('participantes', ParticipanteController::class);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('eventos', EventoController::class);


Route::resource('participantes', ParticipanteController::class);
Route::resource('participantes', ParticipanteController::class)->only(['index']);

use App\Http\Controllers\DashboardController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/export/pdf', [DashboardController::class, 'exportPDF'])->name('dashboard.export.pdf');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/export/pdf', [DashboardController::class, 'exportPDF'])->name('dashboard.export.pdf');



