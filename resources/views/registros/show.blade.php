<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalles del Registro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <tbody>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Temperatura</th>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $registro->temperatura }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Humedad</th>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $registro->humedad }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $registro->fecha }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hora</th>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $registro->hora }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sensor</th>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $registro->id_sensor }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('registros.index') }}" class="btn btn-secondary mt-4">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
