@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content')
    <div class="index-container">
        <h1>Bem-vindo ao Calculador de Bem-Estar</h1>
        <p>Escolha uma das opções abaixo para começar:</p>

        <div class="options">
            <div class="option">
                <a href="{{ route('imc.form') }}" class="btn">Calcular IMC</a>
            </div>
            <div class="option">
                <a href="{{ route('sono.form') }}" class="btn">Avaliar Sono</a>
            </div>
            <div class="option">
                <a href="{{ route('viagem.form') }}" class="btn">Calcular Gasto Viagem</a>
            </div>
        </div>
    </div>
@endsection
