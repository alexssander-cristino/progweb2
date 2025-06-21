<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Relatório de Eventos</title>
    <style>
        body { font-family: sans-serif; font-size: 14px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #f5f5f5; }
    </style>
</head>
<body>
    <h2>Relatório de Eventos e Participantes</h2>

    <table>
        <thead>
            <tr>
                <th>Evento</th>
                <th>Número de Participantes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($eventos as $evento)
                <tr>
                    <td>{{ $evento->nome }}</td>
                    <td>{{ $evento->participantes_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
