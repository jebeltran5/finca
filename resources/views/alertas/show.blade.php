<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles de la Alerta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Detalles de la Alerta</h1>

                <div class="mb-4">
                    <strong>Fecha y Hora:</strong>
                    <p>{{ $alerta->fecha_hora }}</p>
                </div>

                <div class="mb-4">
                    <strong>Tipo de Alerta:</strong>
                    <p>{{ $alerta->tipo_alerta }}</p>
                </div>

                <div class="mb-4">
                    <strong>Valor Registrado:</strong>
                    <p>{{ $alerta->valor_registrado }}</p>
                </div>

                <div class="mb-4">
                    <strong>Descripción:</strong>
                    <p>{{ $alerta->descripcion }}</p>
                </div>

                <div class="mb-4">
                    <strong>Registro:</strong>
                    <p>{{ $alerta->registro->descripcion }}</p> <!-- Asumiendo que 'descripcion' es un atributo de 'registro' -->
                </div>

                <div class="flex justify-start">
                    <a href="{{ route('alertas.edit', $alerta) }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-600">Editar</a>
                    <a href="{{ route('alertas.index') }}" class="ml-4 bg-gray-500 text-white py-2 px-4 rounded hover:bg-gray-600">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
