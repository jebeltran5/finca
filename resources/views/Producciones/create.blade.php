<!-- resources/views/producciones/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añadir Producción') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Añadir Producción</h1>
                
                <form action="{{ route('producciones.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="fecha_cosecha" class="block text-gray-700">Fecha de Cosecha</label>
                        <input type="date" name="fecha_cosecha" id="fecha_cosecha" class="form-input mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="cantidad" class="block text-gray-700">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad" class="form-input mt-1 block w-full" step="0.01" required>
                    </div>
                    <div class="mb-4">
                        <label for="estado" class="block text-gray-700">Estado</label>
                        <select name="estado" id="estado" class="form-select mt-1 block w-full" required>
                            <option value="brocado">Brocado</option>
                            <option value="buen estado">Buen Estado</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="id_cultivo" class="block text-gray-700">Cultivo</label>
                        <select name="id_cultivo" id="id_cultivo" class="form-select mt-1 block w-full" required>
                            @foreach($cultivos as $cultivo)
                                <option value="{{ $cultivo->id_cultivo }}">{{ $cultivo->tipo_cultivo }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Guardar</button>
                        <a href="{{ route('producciones.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
