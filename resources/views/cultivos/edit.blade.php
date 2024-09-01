<!-- resources/views/cultivos/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Cultivo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Editar Cultivo</h1>

                <form action="{{ route('cultivos.update', $cultivo->id_cultivo) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="tipo_cultivo" class="block text-gray-700">Tipo de Cultivo</label>
                        <input type="text" name="tipo_cultivo" class="form-input mt-1 block w-full" value="{{ $cultivo->tipo_cultivo }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="fecha_siembra" class="block text-gray-700">Fecha de Siembra</label>
                        <input type="date" name="fecha_siembra" class="form-input mt-1 block w-full" value="{{ $cultivo->fecha_siembra }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="estado" class="block text-gray-700">Estado</label>
                        <input type="text" name="estado" class="form-input mt-1 block w-full" value="{{ $cultivo->estado }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="id_lote" class="block text-gray-700">Lote</label>
                        <select name="id_lote" class="form-select mt-1 block w-full" required>
                            @foreach($lotes as $lote)
                                <option value="{{ $lote->id_lote }}" {{ $lote->id_lote == $cultivo->id_lote ? 'selected' : '' }}>
                                    {{ $lote->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Actualizar</button>
                        <a href="{{ route('cultivos.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
