<!-- resources/views/producciones/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Producciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Lista de Producciones</h1>
                <a href="{{ route('producciones.create') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600 mb-4 inline-block">
                    Añadir Producción
                </a>
                
                <table class="min-w-full border-collapse border border-gray-200">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">Fecha de Cosecha</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Cantidad</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Estado</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Cultivo</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($producciones as $produccion)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $produccion->fecha_cosecha->format('Y-m-d') }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $produccion->cantidad }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $produccion->estado }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                {{ $produccion->cultivo->tipo_cultivo }}
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('producciones.edit', $produccion->id_produccion) }}" class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">Editar</a>
                                <form action="{{ route('producciones.destroy', $produccion->id_produccion) }}" method="POST" class="inline-block">
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
