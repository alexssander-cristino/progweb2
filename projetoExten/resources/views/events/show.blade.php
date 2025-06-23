<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ $event->nome }}</h2>
    </x-slot>

    <div class="py-8 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6 space-y-4">
            <p><strong>Descrição:</strong> {{ $event->descricao }}</p>
            <p><strong>Local:</strong> {{ $event->local }}</p>
            <p><strong>Data do Evento:</strong> {{ \Carbon\Carbon::parse($event->data_evento)->format('d/m/Y') }}</p>
        </div>

        <div class="mt-4">
            <a href="{{ route('events.index') }}" class="text-blue-600 hover:text-blue-900">Voltar para lista</a>
        </div>
    </div>
</x-app-layout>
