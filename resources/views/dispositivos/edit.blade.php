<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Dispositivo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Editar Dispositivo</h1>

                <form action="{{ route('dispositivos.update', $dispositivo->id_sensor) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group mb-4">
                        <label for="tipo_sensor" class="block text-gray-700 font-bold mb-2">Tipo de Sensor</label>
                        <input type="text" name="tipo_sensor" id="tipo_sensor" value="{{ old('tipo_sensor', $dispositivo->tipo_sensor) }}" class="border border-gray-300 rounded p-2 w-full" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="estado" class="block text-gray-700 font-bold mb-2">Estado</label>
                        <input type="text" name="estado" id="estado" value="{{ old('estado', $dispositivo->estado) }}" class="border border-gray-300 rounded p-2 w-full" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="id_estacion" class="block text-gray-700 font-bold mb-2">Estación</label>
                        <select name="id_estacion" id="id_estacion" class="border border-gray-300 rounded p-2 w-full" required>
                            <option value="" disabled>Seleccionar una estación</option>
                            @foreach($estaciones as $estacion)
                                <option value="{{ $estacion->id_estacion }}" {{ $dispositivo->id_estacion == $estacion->id_estacion ? 'selected' : '' }}>
                                    {{ $estacion->nombre_estacion }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex justify-start">
                        <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Actualizar</button>
                        <a href="{{ route('dispositivos.index') }}" class="ml-4 bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
