@extends('layouts.app')

@section('title', 'Calcular IMC')

@section('content')
    <h1>Calcule seu IMC</h1>
    <form action="{{ route('calcular.imc') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="peso">Peso (kg):</label>
        <input type="number" name="peso" id="peso" required><br>

        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" name="altura" id="altura" required><br>

        <button class="btnenv" type="submit">Calcular IMC</button>
    </form>
@endsection
