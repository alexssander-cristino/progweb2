@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold mb-4">Editar Evento</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> Corrija os erros abaixo:
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('eventos.update', $evento->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Evento</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $evento->nome) }}" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" name="data" id="data" class="form-control" value="{{ old('data', $evento->data) }}" required>
        </div>

        <div class="mb-3">
            <label for="local" class="form-label">Local</label>
            <input type="text" name="local" id="local" class="form-control" value="{{ old('local', $evento->local) }}" required>
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem Atual</label><br>
            @if($evento->imagem)
                <img src="{{ asset('storage/' . $evento->imagem) }}" width="120" class="rounded shadow-sm mb-2">
            @else
                <p class="text-muted">Sem imagem</p>
            @endif
            <input type="file" name="imagem" id="imagem" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Salvar Alterações</button>
        <a href="{{ route('eventos.index') }}" class="btn btn-secondary ms-2">← Cancelar</a>
    </form>
</div>
@endsection
