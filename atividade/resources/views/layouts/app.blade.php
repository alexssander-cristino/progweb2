<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha Aplicação')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Certifique-se de que o caminho para o CSS está correto -->
</head>
<body>
    <div class="container">
        @yield('content') <!-- Aqui o conteúdo das views vai ser injetado -->
    </div>
</body>
</html>
