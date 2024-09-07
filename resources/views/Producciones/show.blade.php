<!-- resources/views/producciones/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de Producción') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Detalles de Producción</h1>

                <div class="mb-4">
                    <p><strong>Fecha de Cosecha:</strong> {{ $produccion->fecha_cosecha->format('Y-m-d') }}</p>
                </div>
                <div class="mb-4">
                    <p><strong>Cantidad:</strong> {{ $produccion->cantidad }}</p>
                </div>
                <div class="mb-4">
                    <p><strong>Estado:</strong> {{ $produccion->estado }}</p>
                </div>
                <div class="mb-4">
                    <p><strong>Cultivo:</strong> {{ $produccion->cultivo->tipo_cultivo }}</p>
                </div>

                <div class="flex items-center justify-between">
                    <a href="{{ route('producciones.index') }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Volver</a>
                    <a href="{{ route('producciones.edit', $produccion->id_produccion) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Editar</a>
                    
                    <form action="{{ route('producciones.destroy', $produccion->id_produccion) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600" onclick="return confirm('¿Estás seguro de que deseas eliminar esta producción?');">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
