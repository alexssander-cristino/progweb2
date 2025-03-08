<!-- resources/views/contact.blade.php -->

@extends('layout.app')

@section('title', 'Contato')

@section('content')
    <section class="contact-form">
        <h1>Fale Conosco</h1>
        
        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf

            <div>
                <label for="name">Nome:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name') 
                    <div class="error">{{ $message }}</div> 
                @enderror
            </div>

            <div>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email') 
                    <div class="error">{{ $message }}</div> 
                @enderror
            </div>

            <div>
                <label for="message">Mensagem:</label>
                <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                @error('message') 
                    <div class="error">{{ $message }}</div> 
                @enderror
            </div>

            <button type="submit" class="btn">Enviar</button>
        </form>
    </section>
@endsection
