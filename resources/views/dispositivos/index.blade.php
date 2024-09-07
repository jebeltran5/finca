<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dispositivos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6" >Lista de dispositivos</h1>
                
            <div class="mb-4 text-left">
                <a href="{{ route('dispositivos.create') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Añadir Dispositivo</a>
            </div>
                <table class="min-w-full mt-4 border-collapse border border-gray-200">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2">ID Sensor</th>
                            <th class="border border-gray-300 px-4 py-2">Tipo Sensor</th>
                            <th class="border border-gray-300 px-4 py-2">Estado</th>
                            <th class="border border-gray-300 px-4 py-2">Estación</th>
                            <th class="border border-gray-300 px-4 py-2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dispositivos as $dispositivo)
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $dispositivo->id_sensor }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $dispositivo->tipo_sensor }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $dispositivo->estado }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $dispositivo->estacion->nombre_estacion }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    <a href="{{ route('dispositivos.edit', $dispositivo->id_sensor) }}" class="bg-yellow-500 text-white py-1 px-2 rounded">Editar</a>
                                    <form action="{{ route('dispositivos.destroy', $dispositivo->id_sensor) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white py-1 px-2 rounded">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="flex justify-center mt-6">
                    <a href="{{ route('dashboard') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Ir al Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
