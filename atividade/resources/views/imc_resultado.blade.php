@extends('layouts.app')

@section('title', 'Resultado IMC')

@section('content')
    <h1>Resultado do Cálculo do IMC</h1>

    <p><strong>Nome:</strong> {{ $nome }}</p>
    <p><strong>Peso:</strong> {{ $peso }} kg</p>
    <p><strong>Altura:</strong> {{ $altura }} m</p>
    <p><strong>IMC:</strong> {{ number_format($imc, 2) }}</p>
    <p><strong>Classificação:</strong> {{ $classificacao }}</p>

    <!-- Div que envolve os botões para centralizar -->
    <div class="button-container">
        <a href="{{ route('imc.form') }}" class="btn">Avaliar novamente</a>
        <a href="{{ url('/') }}" class="btn-voltar">Voltar à Página Inicial</a>
    </div>
@endsection
