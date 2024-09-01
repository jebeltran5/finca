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

                <!-- Input Fields -->
                <div class="flex flex-col md:flex-row gap-6 mb-6">
                    <!-- Column 1 -->
                    <div class="flex flex-col gap-6 md:w-1/3">
                        <!-- Finca Input -->
                        <div class="text-center">
                            <input type="button" value="Finca" class="w-full text-center bg-red-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-red-700 cursor-pointer">
                        </div>

                        <!-- Estación Input -->
                        <div class="text-center">
                            <input type="button" value="Estación" class="w-full text-center bg-green-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-green-700 cursor-pointer">
                        </div>

                        <!-- Alertas Input -->
                        <div class="text-center">
                            <input type="button" value="Alertas" class="w-full text-center bg-red-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-red-700 cursor-pointer">
                        </div>
                    </div>
                </div>

                <!-- Additional Input Fields -->
                <div class="flex flex-col md:flex-row gap-6">
                    <!-- Column 2 -->
                    <div class="flex flex-row gap-6 md:w-full">
                        <!-- Registro Input -->
                        <div class="flex-1">
                            <input type="button" value="Registro" class="w-full text-center bg-yellow-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-yellow-700 cursor-pointer">
                        </div>

                        <!-- Información Input -->
                        <div class="flex-1">
                            <input type="button" value="Información" class="w-full text-center bg-blue-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-blue-700 cursor-pointer">
                        </div>

                        <!-- Dispositivos Input -->
                        <div class="flex-1">
                            <input type="button" value="Dispositivos" class="w-full text-center bg-purple-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-purple-700 cursor-pointer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>