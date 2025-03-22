@extends('layouts.app')

@section('title', 'Avaliar Sono')

@section('content')
    <h1>Avalie seu Sono</h1>
    <form action="{{ route('avaliar.sono') }}" method="POST">
        @csrf
        <label for="horas_sono">Quantas horas você dorme por noite?</label>
        <input type="number" name="horas_sono" id="horas_sono" required><br>

        <label for="qualidade_sono">Como você avalia a qualidade do seu sono?</label>
        <select name="qualidade_sono" id="qualidade_sono">
            <option value="Boa">Boa</option>
            <option value="Regular">Regular</option>
            <option value="Ruim">Ruim</option>
        </select><br>

        <button class="btnenv" type="submit">Avaliar Sono</button>
    </form>
@endsection
