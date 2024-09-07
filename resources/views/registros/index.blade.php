<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Lista de Registros') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Lista de registros</h1>
                    <a href="{{ route('registros.create') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600 mb-4 inline-block">Nuevo Registro</a>
                    <table class="min-w-full border-collapse border border-gray-200">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-4 py-2 text-left">Temperatura</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Humedad</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Fecha</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Hora</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Sensor</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($registros as $registro)
                            <tr>
                                <td  class="border border-gray-300 px-4 py-2">{{ $registro->temperatura }}</td>
                                <td  class="border border-gray-300 px-4 py-2">{{ $registro->humedad }}</td>
                                <td  class="border border-gray-300 px-4 py-2">{{ $registro->fecha }}</td>
                                <td  class="border border-gray-300 px-4 py-2">{{ $registro->hora }}</td>
                                <td  class="border border-gray-300 px-4 py-2">{{ $registro->id_sensor }}</td>
                                <td  class="border border-gray-300 px-4 py-2">
                                    <a href="{{ route('registros.edit', $registro->id_registro) }}" class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">Editar</a>
                                    <form action="{{ route('registros.destroy', $registro->id_registro) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-600">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="mt-6 text-center">
                    <a href="{{ route('dashboard') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Volver al Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
