<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Cadastrar Evento</h2>
    </x-slot>

    <div class="py-8 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
            <form method="POST" action="{{ route('events.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Nome</label>
                    <input type="text" name="nome" value="{{ old('nome') }}" class="mt-1 block w-full rounded-md shadow-sm" required>
                    @error('nome')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Descrição</label>
                    <textarea name="descricao" class="mt-1 block w-full rounded-md shadow-sm">{{ old('descricao') }}</textarea>
                    @error('descricao')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Local</label>
                    <input type="text" name="local" value="{{ old('local') }}" class="mt-1 block w-full rounded-md shadow-sm">
                    @error('local')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300">Data do Evento</label>
                    <input type="date" name="data_evento" value="{{ old('data_evento') }}" class="mt-1 block w-full rounded-md shadow-sm" required>
                    @error('data_evento')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cadastrar</button>
                <a href="{{ route('events.index') }}" class="ml-4 text-gray-600 hover:text-gray-900">Cancelar</a>
            </form>
        </div>
    </div>
</x-app-layout>
