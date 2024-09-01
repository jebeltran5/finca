<!-- resources/views/lotes/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añadir Lote') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Añadir Lote</h1>
                
                <form action="{{ route('lotes.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-700">Nombre</label>
                        <input type="text" name="nombre" class="form-input mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="dimension" class="block text-gray-700">Dimensión</label>
                        <input type="text" name="dimension" class="form-input mt-1 block w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="id_finca" class="block text-gray-700">Finca</label>
                        <select name="id_finca" class="form-select mt-1 block w-full" required>
                            @foreach($fincas as $finca)
                                <option value="{{ $finca->id_finca }}">{{ $finca->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Guardar</button>
                        <a href="{{ route('lotes.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
