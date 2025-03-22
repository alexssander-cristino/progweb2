@extends('layouts.app')

@section('title', 'Resultado da Avaliação do Sono')

@section('content')
    <h1>Resultado da Avaliação do Sono</h1>

    <p><strong>Horas de Sono:</strong> {{ $horas_sono }} horas</p>
    <p><strong>Qualidade do Sono:</strong> {{ $qualidade }}</p>

    <a href="{{ route('sono.form') }}" class="btn">Avaliar novamente</a>
@endsection
