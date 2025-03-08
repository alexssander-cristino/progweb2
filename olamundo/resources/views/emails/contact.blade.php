<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Mensagem de Contato</title>
</head>
<body>
    <h1>Nova Mensagem de Contato</h1>
    <p><strong>Nome:</strong> {{ $contactData['name'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $contactData['message'] }}</p>
</body>
</html>
