<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center space-x-8">
                <!-- Logo / Home -->
                <a href="{{ route('home') }}" class="flex items-center">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    <span class="ml-2 font-semibold text-lg text-gray-800 dark:text-gray-200">Início</span>
                </a>

                <!-- Navegação -->
                <a href="{{ route('volunteers.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white font-medium">Voluntários</a>
                <a href="{{ route('donations.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white font-medium">Doações</a>
                <a href="{{ route('events.index') }}" class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white font-medium">Eventos</a>
            </div>

            <div class="flex items-center">
                <!-- Aqui poderia colocar um botão de login, se quiser futuramente -->
                <span class="text-gray-500 dark:text-gray-400">Usuário Anônimo</span>
            </div>
        </div>
    </div>
</nav>
