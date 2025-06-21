@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 80vh;">
    <h1 class="text-center fw-bold mb-4">Bem-vindo à Plataforma de Eventos</h1>
    <p class="text-center fs-5 text-muted mb-5">Escolha uma das opções abaixo para começar</p>

    <div class="d-grid gap-4 col-10 col-md-6">

        <!-- Botão Eventos -->
        <a href="{{ route('eventos.index') }}" class="btn btn-outline-primary btn-lg d-flex align-items-center justify-content-start px-4 py-3">
            <img src="https://img.icons8.com/color/48/000000/calendar--v1.png" class="me-3" alt="Eventos">
            <span class="fs-4">Gerenciar Eventos</span>
        </a>

        <!-- Botão Participantes (FUNCIONAL) -->
        <a href="{{ route('participantes.index') }}" class="btn btn-outline-success btn-lg d-flex align-items-center justify-content-start px-4 py-3">
            <img src="https://img.icons8.com/color/48/000000/conference-call.png" class="me-3" alt="Participantes">
            <span class="fs-4">Ver Participantes</span>


            <!-- Botão Dashboard -->
        <a href="{{ route('dashboard') }}" class="btn btn-outline-dark btn-lg d-flex align-items-center justify-content-start px-4 py-3">
            <img src="https://img.icons8.com/fluency/48/dashboard-layout.png" class="me-3" alt="Dashboard">
            <span class="fs-4">Dashboard</span>
        </a>
   
    </div>
</div>
@endsection
