@extends('layouts.app')

@section('title', 'Resultado do Gasto da Viagem')

@section('content')
    <div class="container">
        <div class="resultado">
            <h1>Resultado do Gasto da Viagem</h1>

            <p><strong>Distância da Viagem:</strong> {{ $distancia }} km</p>
            <p><strong>Preço do Combustível:</strong> R$ {{ number_format($preco_combustivel, 2, ',', '.') }} por litro</p>
            <p><strong>Consumo do Carro:</strong> {{ $consumo_carro }} km/litro</p>
            <p><strong>Gasto Total:</strong> R$ {{ number_format($gasto_total, 2, ',', '.') }}</p>

              <!-- Div que envolve os botões para centralizar -->
            <div class="button-container">
                 <a href="{{ route('viagem.form') }}" class="btn">Avaliar novamente</a>
                <a href="{{ url('/') }}" class="btn-voltar">Voltar à Página Inicial</a>
            </div>
        </div>
    </div>
@endsection
