<!-- resources/views/fincas/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Finca') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Editar Finca</h1>

                <form action="{{ route('fincas.update', $finca->id_finca) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-4">
                        <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre</label>
                        <input type="text" name="nombre" class="form-control border border-gray-300 rounded p-2 w-full" value="{{ $finca->nombre }}" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="propietario" class="block text-gray-700 font-bold mb-2">Propietario</label>
                        <input type="text" name="propietario" class="form-control border border-gray-300 rounded p-2 w-full" value="{{ $finca->propietario }}" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="location" class="block text-gray-700 font-bold mb-2">Ubicación</label>
                        <input type="text" name="location" class="form-control border border-gray-300 rounded p-2 w-full" value="{{ $finca->location }}" required>
                    </div>
                    <div class="flex justify-start">
                        <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Actualizar</button>
                        <a href="{{ route('fincas.index') }}" class="ml-4 bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
