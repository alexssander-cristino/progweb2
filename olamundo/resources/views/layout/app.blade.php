<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação')</title>
    <!-- Adicionando o CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Incluindo o cabeçalho -->
    @include('layout.header')

    <div class="content">
        <!-- A seção de conteúdo de cada página -->
        @yield('content')
    </div>

    <!-- Incluindo o rodapé -->
    @include('layout.footer')

    <!-- Adicionando o JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
