<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\EventController;


// Página inicial
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return redirect()->route('home');
})->name('dashboard');


// Voluntários CRUD
Route::resource('volunteers', VolunteerController::class);

// Doações CRUD
Route::resource('donations', DonationController::class);

// Eventos CRUD
Route::resource('events', EventController::class);


