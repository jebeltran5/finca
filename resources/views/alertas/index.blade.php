<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Alertas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="flex justify-between mb-6">
                    <h1 class="text-3xl font-bold text-gray-900">Lista de Alertas</h1>
                    <a href="{{ route('alertas.create') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Añadir Nueva Alerta</a>
                </div>

                <table class="min-w-full bg-white border border-gray-300">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Fecha y Hora</th>
                            <th class="py-2 px-4 border-b">Tipo de Alerta</th>
                            <th class="py-2 px-4 border-b">Valor Registrado</th>
                            <th class="py-2 px-4 border-b">Descripción</th>
                            <th class="py-2 px-4 border-b">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alertas as $alerta)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $alerta->fecha_hora }}</td>
                                <td class="py-2 px-4 border-b">{{ $alerta->tipo_alerta }}</td>
                                <td class="py-2 px-4 border-b">{{ $alerta->valor_registrado }}</td>
                                <td class="py-2 px-4 border-b">{{ $alerta->descripcion }}</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('alertas.show', $alerta) }}" class="text-blue-500 hover:text-blue-700">Ver</a>
                                    <a href="{{ route('alertas.edit', $alerta) }}" class="ml-4 text-yellow-500 hover:text-yellow-700">Editar</a>
                                    <form action="{{ route('alertas.destroy', $alerta) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="ml-4 text-red-500 hover:text-red-700">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
