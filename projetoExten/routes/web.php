<?php

use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', function () {
    return view('index');
});

// Cadastro de usuário
Route::get('/cadastro', function () {
    return view('cadastro_usuario');
});

// Edição de usuário
Route::get('/editar', function () {
    return view('editar_usuario');
});

// Progresso do usuário
Route::get('/progresso', function () {
    return view('progresso_usuario');
});

// Pesquisa
Route::get('/pesquisa', function () {
    return view('pesquisa');
});

// Ranking
Route::get('/ranking', function () {
    return view('rank');
});

// Detalhes dos pontos
Route::get('/detalhes', function () {
    return view('detalhes_pontos');
});
