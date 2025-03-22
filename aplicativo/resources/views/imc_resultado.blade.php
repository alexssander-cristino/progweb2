@extends('layouts.app')

@section('title', 'Resultado IMC')

@section('content')
    <h1>Resultado do Cálculo do IMC</h1>

    <p><strong>Nome:</strong> {{ $nome }}</p>
    <p><strong>Peso:</strong> {{ $peso }} kg</p>
    <p><strong>Altura:</strong> {{ $altura }} m</p>
    <p><strong>IMC:</strong> {{ number_format($imc, 2) }}</p>
    <p><strong>Classificação:</strong> {{ $classificacao }}</p>

    <a href="{{ route('imc.form') }}" class="btn">Calcular novamente</a>
@endsection
