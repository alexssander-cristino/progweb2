@extends('layouts.app')

@section('title', 'Calcular Gasto Viagem')

@section('content')
    <div class="container">
        <form action="{{ route('calcular.viagem') }}" method="POST">
            @csrf
            <label for="distancia">Distância (km):</label>
            <input type="number" name="distancia" id="distancia" required><br>

            <label for="preco_combustivel">Preço do Combustível (por litro):</label>
            <input type="number" step="0.01" name="preco_combustivel" id="preco_combustivel" required><br>

            <label for="consumo_carro">Consumo do Carro (km/litro):</label>
            <input type="number" step="0.01" name="consumo_carro" id="consumo_carro" required><br>

            <button type="submit">Calcular Gasto</button>
        </form>
    </div>
@endsection
