<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">CLOT</h1>
                 <div class="flex justify-start  bg-red-800">
                <div class="horizontal-buttons gap-6 mb-6">
                    <a href="{{ url('/fincas') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-40 h-40 flex items-center justify-center">
                        Fincas
                    </a>
                    <a href="{{ url('/lotes') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-40 h-40 flex items-center justify-center">
                        Lotes
                    </a>
                    <a href="{{ url('/cultivos') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-40 h-40 flex items-center justify-center">
                        Cultivos
                    </a>
                    <a href="{{ url('/producciones') }}" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-40 h-40 flex items-center justify-center">
                        Producción
                    </a>
                </div>
                </div>
                 <div class="flex justify-end">
                <div class=" vertical-buttons flex flex-col items-end gap-6 mb-6">
                    <a href="" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-40 h-40 flex items-center justify-center">
                        Estaciones
                    </a>
                    <a href="" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-40 h-40 flex items-center justify-center">
                        Dispositivos
                    </a>
                    <a href="" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-40 h-40 flex items-center justify-center">
                        Registros
                    </a>
                    <a href="" class="text-center bg-red-600 text-white py-3 px-6 rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 w-40 h-40 flex items-center justify-center">
                        Alertas
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .w-40 {
            width: 200px;
        }
        .h-40 {
            height: 50px; 
        }
        .horizontal-buttons {
            display: flex;
            flex-wrap: wrap; /* Permite que los botones se envuelvan en la fila si es necesario */
            gap: 122px; /* Ajusta el espacio entre botones */
            justify-content: center; /* Alinea los botones en el centro horizontalmente */
            margin-bottom: 24px; /* Ajusta el margen inferior del contenedor */
        }
        .vertical-buttons {
            display: flex;
            flex-direction: column;
            align-items: ; /* Alinea los botones a la derecha */
            gap: 80px; /* Ajusta el espacio entre botones */
            margin-top: 50px; /* Ajusta el margen superior */
            margin-right: 5px;
        }
    </style>
    
</x-app-layout>
