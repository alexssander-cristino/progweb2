<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Doações') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg p-6">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Doador</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Tipo</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Valor</th>
                            <th class="px-6 py-3 text-left font-medium text-gray-500 dark:text-gray-200">Data</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($donations as $donation)
                            <tr>
                                <td class="px-6 py-4">{{ $donation->donor_name }}</td>
                                <td class="px-6 py-4">{{ $donation->type }}</td>
                                <td class="px-6 py-4">R$ {{ number_format($donation->amount, 2, ',', '.') }}</td>
                                <td class="px-6 py-4">{{ $donation->date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
