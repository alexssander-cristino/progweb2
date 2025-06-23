<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Sistema de Voluntariado') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <a href="{{ route('volunteers.index') }}" class="block bg-green-600 hover:bg-green-700 text-white font-bold py-6 rounded text-center shadow">
                Voluntários
            </a>

            <a href="{{ route('donations.index') }}" class="block bg-blue-600 hover:bg-blue-700 text-white font-bold py-6 rounded text-center shadow">
                Doações
            </a>

            <a href="{{ route('events.index') }}" class="block bg-purple-600 hover:bg-purple-700 text-white font-bold py-6 rounded text-center shadow">
                Eventos
            </a>

            
            </a>
        </div>
    </div>
</x-app-layout>
