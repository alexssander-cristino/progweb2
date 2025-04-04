@extends('layouts.app')

@section('title', 'Resultado da Avaliação do Sono')

@section('content')
    <h1>Resultado da Avaliação do Sono</h1>

    <p><strong>Horas de Sono:</strong> {{ $horas_sono }} horas</p>
    <p><strong>Qualidade do Sono:</strong> {{ $qualidade }}</p>

    <!-- Div que envolve os botões para centralizar -->
    <div class="button-container">
        <a href="{{ route('sono.form') }}" class="btn">Avaliar novamente</a>
        <a href="{{ url('/') }}" class="btn-voltar">Voltar à Página Inicial</a>
    </div>
@endsection
