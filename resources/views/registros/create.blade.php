<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Registro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
            <h1 class="text-3xl font-bold text-gray-900 mb-6">Añadir Registro</h1>
                
                    <form action="{{ route('registros.store') }}" method="POST">
                        @csrf
                        
                            <div class="mb-4">
                                <label for="temperatura" class="block text-gray-700">Temperatura</label>
                                <input type="text" name="temperatura" id="temperatura" class="form-input mt-1 block w-full" required>
                            </div>
                            <div>
                                <label for="humedad" class="block text-gray-700">Humedad</label>
                                <input type="text" name="humedad" id="humedad" class="form-input mt-1 block w-full" required>
                            </div>
                            <div>
                                <label for="fecha" class="block text-gray-700">Fecha</label>
                                <input type="date" name="fecha" id="fecha" class="form-input mt-1 block w-full" required>
                            </div>
                            <div>
                                <label for="hora" class="block text-gray-700">Hora</label>
                                <input type="time" name="hora" id="hora" class="form-input mt-1 block w-full" required>
                            </div>
                            <div>
                                <label for="id_sensor" class="block text-gray-700">Sensor</label>
                                <select name="id_sensor" id="id_sensor" class="form-select mt-1 block w-full" required>
                                    @foreach (\App\Models\Dispositivo::all() as $dispositivo)
                                        <option value="{{ $dispositivo->id_sensor }}">{{ $dispositivo->id_sensor }}</option>
                                    @endforeach
                                </select>
                            </div>
                          
                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Guardar</button>
                            <a href="{{ route('registros.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Cancelar</a>
                        </div>
                    </form>
                
            </div>
        </div>
    </div>
</x-app-layout>
