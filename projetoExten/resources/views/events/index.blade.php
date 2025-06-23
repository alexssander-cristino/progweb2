<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Eventos</h2>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('events.create') }}" class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Novo Evento</a>

        @if(session('success'))
            <div class="mb-4 text-green-600 font-semibold">{{ session('success') }}</div>
        @endif

        <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6 overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Nome</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Descrição</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Local</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Data do Evento</th>
                        <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Ações</th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($events as $event)
                        <tr>
                            <td class="px-6 py-4">{{ $event->nome }}</td>
                            <td class="px-6 py-4">{{ $event->descricao }}</td>
                            <td class="px-6 py-4">{{ $event->local }}</td>
                            <td class="px-6 py-4">{{ \Carbon\Carbon::parse($event->data_evento)->format('d/m/Y') }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('events.edit', $event->id) }}" class="text-blue-600 hover:text-blue-900 mr-2">Editar</a>

                                <form method="POST" action="{{ route('events.destroy', $event->id) }}" style="display:inline" onsubmit="return confirm('Tem certeza que deseja deletar este evento?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @if($events->isEmpty())
                        <tr><td colspan="5" class="text-center py-4">Nenhum evento cadastrado.</td></tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
