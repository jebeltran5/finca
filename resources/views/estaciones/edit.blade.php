<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Estación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Editar Estación</h1>

                <form action="{{ route('estaciones.update', $estacion->id_estacion) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-4">
                        <label for="nombre_estacion" class="block text-gray-700 font-bold mb-2">Nombre de la Estación</label>
                        <input type="text" name="nombre_estacion" id="nombre_estacion" class="form-control border border-gray-300 rounded p-2 w-full" value="{{ $estacion->nombre_estacion }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="latitud" class="block text-gray-700">Latitud</label>
                        <input type="text" id="latitud" name="latitud" class="form-input mt-1 block w-full" value="{{ number_format($estacion->latitud, 2) }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="longitud" class="block text-gray-700">Longitud</label>
                        <input type="text" id="longitud" name="longitud" class="form-input mt-1 block w-full" value="{{ number_format($estacion->longitud, 2) }}" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="fecha_instalacion" class="block text-gray-700 font-bold mb-2">Fecha de Instalación</label>
                        <input type="date" name="fecha_instalacion" id="fecha_instalacion" class="form-control border border-gray-300 rounded p-2 w-full" value="{{ $estacion->fecha_instalacion }}" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="id_cultivo" class="block text-gray-700 font-bold mb-2">ID Cultivo</label>
                        <input type="text" name="id_cultivo" id="id_cultivo" class="form-control border border-gray-300 rounded p-2 w-full" value="{{ $estacion->id_cultivo }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="id_cultivo" class="block text-gray-700">Cultivo</label>
                        <select name="id_cultivo" class="form-select mt-1 block w-full" required>
                            @foreach($cultivos as $cultivo)
                                <option value="{{ $cultivo->id_cultivo }}" {{ $estacion->id_cultivo == $cultivo->id_cultivo ? 'selected' : '' }}>
                                    {{ $cultivo->tipo_cultivo }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex justify-start">
                        <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Actualizar</button>
                        <a href="{{ route('estaciones.index') }}" class="ml-4 bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
