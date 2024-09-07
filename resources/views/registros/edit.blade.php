<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Registro
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('registros.update', $registro->id_registro) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="space-y-4">
                            <div>
                                <label for="temperatura" class="block text-sm font-medium text-gray-700">Temperatura</label>
                                <input type="text" name="temperatura" id="temperatura" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $registro->temperatura }}" required>
                            </div>
                            <div>
                                <label for="humedad" class="block text-sm font-medium text-gray-700">Humedad</label>
                                <input type="text" name="humedad" id="humedad" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $registro->humedad }}" required>
                            </div>
                            <div>
                                <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                                <input type="date" name="fecha" id="fecha" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $registro->fecha }}" required>
                            </div>
                            <div>
                                <label for="hora" class="block text-sm font-medium text-gray-700">Hora</label>
                                <input type="time" name="hora" id="hora" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $registro->hora }}" required>
                            </div>
                            <div>
                                <label for="id_sensor" class="block text-sm font-medium text-gray-700">Sensor</label>
                                <select name="id_sensor" id="id_sensor" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                                    @foreach (\App\Models\Dispositivo::all() as $dispositivo)
                                        <option value="{{ $dispositivo->id_sensor }}" {{ $dispositivo->id_sensor == $registro->id_sensor ? 'selected' : '' }}>{{ $dispositivo->id_sensor }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
