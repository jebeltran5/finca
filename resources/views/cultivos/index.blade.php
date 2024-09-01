<!-- resources/views/cultivos/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Cultivos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Lista de Cultivos</h1>
                <a href="{{ route('cultivos.create') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600 mb-4 inline-block">
                    Añadir Cultivo
                </a>
                
                <table class="min-w-full border-collapse border border-gray-200">
                    <thead>
                        <tr>
                            <th class="border border-gray-300 px-4 py-2 text-left">Tipo de Cultivo</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Fecha de Siembra</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Estado</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Lote</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cultivos as $cultivo)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $cultivo->tipo_cultivo }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $cultivo->fecha_siembra }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $cultivo->estado }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                @if($cultivo->lote)
                                    {{ $cultivo->lote->nombre }}
                                @else
                                    Sin lote asignado
                                @endif
                            </td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('cultivos.edit', $cultivo->id_cultivo) }}" class="bg-yellow-500 text-white py-1 px-3 rounded hover:bg-yellow-600">Editar</a>
                                <form action="{{ route('cultivos.destroy', $cultivo->id_cultivo) }}" method="POST" class="inline-block">
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
