<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de la Estación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Detalles de la Estación</h1>
                <div class="mb-4">
                    <strong class="text-gray-700">Nombre de la Estación:</strong>
                    <p class="text-gray-900">{{ $estacion->nombre_estacion }}</p>
                </div>
                <div class="mb-4">
                    <strong class="text-gray-700">Latitud:</strong>
                    <p class="text-gray-900">{{ $estacion->latitud }}</p>
                </div>
                <div class="mb-4">
                    <strong class="text-gray-700">Longitud:</strong>
                    <p class="text-gray-900">{{ $estacion->longitud }}</p>
                </div>
                <div class="mb-4">
                    <strong class="text-gray-700">Fecha de Instalación:</strong>
                    <p class="text-gray-900">{{ $estacion->fecha_instalacion }}</p>
                </div>
                <div class="mb-4">
                    <strong class="text-gray-700">ID Cultivo:</strong>
                    <p class="text-gray-900">{{ $estacion->id_cultivo }}</p>
                </div>
                <a href="{{ route('estaciones.index') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Volver a la Lista</a>
            </div>
        </div>
    </div>
</x-app-layout>
