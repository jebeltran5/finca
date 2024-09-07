<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">CLOT</h1>

                <!-- Contenedor Principal para Botones -->
                <div class="flex gap-6">
                    <!-- Botones Horizontales (Fincas a Producción) -->
                    <div class="flex flex-row gap-4 mb-6 w-auto">
                        <a href="{{ url('/fincas') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-32">
                            Fincas
                        </a>
                        <a href="{{ url('/lotes') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-32">
                            Lotes
                        </a>
                        <a href="{{ url('/cultivos') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-32">
                            Cultivos
                        </a>
                        <a href="{{ url('/producciones') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-32">
                            Producción
                        </a>
                    </div>

                    <!-- Botones Verticales (Estaciones, Dispositivos, Registros, Alertas) -->
                    <div class="flex flex-col items-start gap-4">
                        <a href="{{ url('/estaciones') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-32">
                            Estaciones
                        </a>
                        <a href="{{ url('/dispositivos') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-32">
                            Dispositivos
                        </a>
                        <a href="{{ url('/registros') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-32">
                            Registros
                        </a>
                        <a href="{{ url('/alertas') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-32">
                            Alertas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
