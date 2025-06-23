<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Voluntários') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('volunteers.create') }}" class="mb-4 inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Novo Voluntário
            </a>

            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Nome</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Email</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Telefone</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Pontos</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($volunteers as $volunteer)
                            <tr>
                                <td class="px-6 py-4">{{ $volunteer->name }}</td>
                                <td class="px-6 py-4">{{ $volunteer->email }}</td>
                                <td class="px-6 py-4">{{ $volunteer->phone }}</td>
                                <td class="px-6 py-4">{{ $volunteer->points }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
