@extends('layouts.app')

@section('title', 'Criar Evento')

@section('content')
<h1>Criar Evento</h1>

<form method="POST" action="{{ route('eventos.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input id="nome" type="text" name="nome" class="form-control @error('nome') is-invalid @enderror" value="{{ old('nome') }}">
        @error('nome')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="data" class="form-label">Data</label>
        <input id="data" type="date" name="data" class="form-control @error('data') is-invalid @enderror" value="{{ old('data') }}">
        @error('data')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="local" class="form-label">Local</label>
        <input id="local" type="text" name="local" class="form-control @error('local') is-invalid @enderror" value="{{ old('local') }}">
        @error('local')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="imagem" class="form-label">Imagem</label>
        <input id="imagem" type="file" name="imagem" class="form-control @error('imagem') is-invalid @enderror">
        @error('imagem')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success">Salvar</button>
</form>
@endsection
