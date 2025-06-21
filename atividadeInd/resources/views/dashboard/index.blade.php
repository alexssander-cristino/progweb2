@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Dashboard</h2>
        <a href="{{ route('dashboard.export.pdf') }}" class="btn btn-danger">Exportar PDF</a>
    </div>

    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total de Eventos</h5>
                    <p class="card-text fs-1">{{ $totalEventos }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total de Participantes</h5>
                    <p class="card-text fs-1">{{ $totalParticipantes }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4">
    <a href="{{ url('/') }}" class="btn btn-secondary">
        ← Voltar à Página Inicial
    </a>
</div>

</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const nomesEventos = @json($eventos->pluck('nome'));
    const qtdParticipantes = @json($eventos->pluck('participantes_count'));

    new Chart(document.getElementById('graficoPizza'), {
        type: 'pie',
        data: {
            labels: nomesEventos,
            datasets: [{
                label: 'Participantes por Evento',
                data: qtdParticipantes,
                backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b'],
            }]
        }
    });

    new Chart(document.getElementById('graficoBarras'), {
        type: 'bar',
        data: {
            labels: nomesEventos,
            datasets: [{
                label: 'Participantes',
                data: qtdParticipantes,
                backgroundColor: '#36b9cc'
            }]
        }
    });
</script>
@endsection
