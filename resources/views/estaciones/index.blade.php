<!-- resources/views/estaciones/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Estaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Lista de Estaciones</h1>
                
                <div class="mb-4 text-left">
                    <a href="{{ route('estaciones.create') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Añadir Estación</a>
                </div>

                <table class="min-w-full mt-4 border-collapse border border-gray-200">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">Nombre</th>
                            <th class="border border-gray-300 px-4 py-2">Latitud</th>
                            <th class="border border-gray-300 px-4 py-2">Longitud</th>
                            <th class="border border-gray-300 px-4 py-2">Fecha Instalación</th>
                            <th class="border border-gray-300 px-4 py-2">Cultivo</th>
                            <th class="border border-gray-300 px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($estaciones as $estacion)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $estacion->nombre_estacion }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ number_format($estacion->latitud, 2) }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ number_format($estacion->longitud, 2) }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ \Carbon\Carbon::parse($estacion->fecha_instalacion)->format('d-m-Y') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $estacion->cultivo->tipo_cultivo }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('estaciones.edit', $estacion->id_estacion) }}" class="bg-yellow-500 text-white py-1 px-2 rounded hover:bg-yellow-600">Editar</a>
                                <form action="{{ route('estaciones.destroy', $estacion->id_estacion) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white py-1 px-2 rounded hover:bg-red-600">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Botón para ir al Dashboard -->
                <div class="flex justify-center mt-6">
                    <a href="{{ route('dashboard') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Ir al Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

