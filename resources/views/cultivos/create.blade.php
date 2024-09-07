<!-- resources/views/cultivos/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añadir Cultivo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Añadir Cultivo</h1>
                
                <form action="{{ route('cultivos.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="tipo_cultivo" class="block text-gray-700">Tipo de Cultivo</label>
                        <input type="text" id="tipo_cultivo" name="tipo_cultivo" class="form-input mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="fecha_siembra" class="block text-gray-700">Fecha de Siembra</label>
                        <input type="date" id="fecha_siembra" name="fecha_siembra" class="form-input mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                    <label for="estado" class="block text-gray-700">Estado</label>
                    <select id="estado" name="estado" class="form-select mt-1 block w-full" required>
                          <option value="produccion">Producción</option>
                          <option value="recien sembrado">Recien Sembrado</option>
                          <option value="soqueado">Soqueado</option>
                          <option value="brocado">Brocado</option>
                          <option value="normal">Normal</option>
                    </select>
                    </div>
                    <div class="mb-4">
                        <label for="id_lote" class="block text-gray-700">Lote</label>
                        <select id="id_lote" name="id_lote" class="form-select mt-1 block w-full" required>
                            @foreach($lotes as $lote)
                                <option value="{{ $lote->id_lote }}">{{ $lote->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Guardar</button>
                        <a href="{{ route('cultivos.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
