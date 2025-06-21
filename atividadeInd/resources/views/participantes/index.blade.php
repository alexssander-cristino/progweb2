@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Participantes</h2>
        <a href="{{ route('participantes.create') }}" class="btn btn-primary">+ Novo Participante</a>
    </div>

    <!-- Formulário de busca -->
    <form action="{{ route('participantes.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Buscar por nome..." value="{{ request('search') }}">
            <button class="btn btn-outline-secondary" type="submit">Buscar</button>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered text-center align-middle shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Evento</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($participantes as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->telefone }}</td>
                    <td>{{ $p->evento->nome ?? '—' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-muted">Nenhum participante encontrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('home') }}" class="btn btn-outline-secondary mt-3">← Voltar para a Página Inicial</a>
</div>
@endsection
