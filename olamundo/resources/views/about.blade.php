@extends('layout.app')

@section('title', 'Sobre Nós')

@section('content')
    <div class="about-section">
        <h1>Sobre Nós</h1>
        
        <p>Bem-vindo à nossa página de "Sobre Nós". Somos uma equipe dedicada e apaixonada por <strong>[área de atuação]</strong>.</p>

        <h2>Nossa História</h2>
        <p>A nossa empresa foi fundada em <strong>[ano]</strong> com o objetivo de <strong>[missão]</strong>. Ao longo dos anos, temos trabalhado para expandir nossas operações e melhorar os serviços oferecidos aos nossos clientes.</p>

        <p>Estamos sempre em busca de inovação, qualidade e excelência em tudo o que fazemos.</p>

        <a href="{{ url('/') }}" class="btn">Voltar para a página inicial</a>
    </div>
@endsection
