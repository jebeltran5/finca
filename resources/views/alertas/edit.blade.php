<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Alerta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Editar Alerta</h1>

                <form action="{{ route('alertas.update', $alerta) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-4">
                        <label for="fecha_hora" class="block text-gray-700 font-bold mb-2">Fecha y Hora</label>
                        <input type="datetime-local" name="fecha_hora" id="fecha_hora" value="{{ $alerta->fecha_hora->format('Y-m-d\TH:i') }}" class="border border-gray-300 rounded p-2 w-full" required>
                    </div>

                    <div class="form-group mb-4">
                        <label for="tipo_alerta" class="block text-gray-700 font-bold mb-2">Tipo de Alerta</label>
                        <input type="text" name="tipo_alerta" id="tipo_alerta" value="{{ $alerta->tipo_alerta }}" class="border border-gray-300 rounded p-2 w-full" required maxlength="3">
                    </div>

                    <div class="form-group mb-4">
                        <label for="valor_registrado" class="block text-gray-700 font-bold mb-2">Valor Registrado</label>
                        <input type="text" name="valor_registrado" id="valor_registrado" value="{{ $alerta->valor_registrado }}" class="border border-gray-300 rounded p-2 w-full" required maxlength="2">
                    </div>

                    <div class="form-group mb-4">
                        <label for="descripcion" class="block text-gray-700 font-bold mb-2">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="4" class="border border-gray-300 rounded p-2 w-full" required maxlength="150">{{ $alerta->descripcion }}</textarea>
                    </div>

                    <div class="form-group mb-4">
                        <label for="id_registro" class="block text-gray-700 font-bold mb-2">Registro</label>
                        <select name="id_registro" id="id_registro" class="border border-gray-300 rounded p-2 w-full" required>
                            <option value="" disabled>Seleccionar un registro</option>
                            @foreach($registros as $registro)
                                <option value="{{ $registro->id_registro }}" {{ $registro->id_registro == $alerta->id_registro ? 'selected' : '' }}>{{ $registro->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex justify-start">
                        <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Actualizar</button>
                        <a href="{{ route('alertas.index') }}" class="ml-4 bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
