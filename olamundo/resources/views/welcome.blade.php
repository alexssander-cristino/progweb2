@extends('layout.app')

@section('title', 'Página Inicial')

@section('content')
    <div class="welcome-section">
        <h1>Bem-vindo à nossa aplicação!</h1>
        
        <p>Essa é a página inicial do nosso site. Aqui você pode explorar as diferentes seções da nossa aplicação.</p>

        <h2>O que você quer fazer?</h2>
        <ul>
            <li><a href="{{ url('/about') }}" class="btn">Saiba mais sobre nós</a></li>
            <li><a href="{{ url('/contact') }}" class="btn">Entre em contato conosco</a></li>
        </ul>
    </div>
@endsection
