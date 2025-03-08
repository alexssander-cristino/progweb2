<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Rota para a página inicial
});

Route::get('/about', function () {
    return view('about'); // Rota para a página Sobre Nós
});

Route::get('/contact', function () {
    return view('contact'); // Rota para a página Contato
});

// routes/web.php

use App\Http\Controllers\ContactController;

Route::get('/contato', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contato', [ContactController::class, 'submitForm'])->name('contact.submit');
