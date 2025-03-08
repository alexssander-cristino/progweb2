@extends('layout.app')

@section('title', 'Página Inicial')

@section('content')
    <div class="welcome-section">
        <h1>Bem-vindo à Nossa Aplicação!</h1>
        
        <p>Estamos muito felizes por você estar aqui! Nossa aplicação foi criada para oferecer uma experiência única e simplificada em <strong>[descreva o propósito da sua aplicação]</strong>. Queremos tornar suas tarefas mais fáceis, rápidas e eficientes.</p>
        
        <p>Com recursos inovadores e uma interface amigável, você poderá aproveitar o que há de melhor em <strong>[área/indústria de sua aplicação]</strong>. Se você está aqui pela primeira vez, não se preocupe! Navegar e começar a utilizar nossa plataforma é super simples.</p>
        
        <h2>O que você pode fazer aqui?</h2>
        <ul>
            <li><strong>Gerenciar suas informações:</strong> Acesse e edite seus dados rapidamente.</li>
            <li><strong>Realizar tarefas com facilidade:</strong> Nossa plataforma torna suas atividades diárias mais ágeis e organizadas.</li>
            <li><strong>Explorar novos recursos:</strong> Estamos sempre trazendo novidades e melhorias para você.</li>
        </ul>

        <h2>Como podemos te ajudar?</h2>
        <p>Se você tiver alguma dúvida ou precisar de suporte, nossa equipe está pronta para te ajudar! Visite nossa seção de <a href="{{ url('/contact') }}">contato</a> para saber como falar conosco. Se preferir, também pode consultar nosso <a href="{{ url('/about') }}">guia de ajuda</a> e encontrar todas as respostas que você precisa.</p>

        <p>Obrigado por escolher nossa aplicação. Estamos aqui para fazer a diferença na sua jornada!</p>
        
        <div class="cta">
            <a href="{{ url('/about') }}" class="btn">Saiba mais sobre nós</a>
        </div>
    </div>
@endsection
