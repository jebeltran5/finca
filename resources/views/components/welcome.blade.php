<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Incluye solo una versión de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-gray-900 mb-6 text-center">CLOT</h1>

        
        <!-- Input Fields -->
        <div class="flex flex-col md:flex-row gap-6 mb-6">
            <!-- Column 1 -->
            <div class="flex flex-col gap-6 md:w-1/3">
                <!-- Finca Input -->
                <div class="text-center">
                    <input type="button" value="Finca" class="w-full text-center bg-red-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-red-700 cursor-pointer" onclick="">
                </div>

                <!-- Estación Input -->
                <div class="text-center">
                    <input type="button" value="Estación" class="w-full text-center bg-red-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-green-700 cursor-pointer" onclick="">
                </div>

                <!-- Alertas Input -->
                <div class="text-center">
                    <input type="button" value="Alertas" class="w-full text-center bg-red-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-red-700 cursor-pointer" onclick="">
                </div>
            </div>
        </div>

        <!-- Additional Input Fields -->
        <div class="flex flex-col md:flex-row gap-6">
            <!-- Column 2 -->
            <div class="flex flex-row gap-6 md:w-full">
                <!-- Registro Input -->
                <div class="flex-1">
                    <input type="button" value="Registro" class="w-full text-center bg-red-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-yellow-700 cursor-pointer" onclick="">
                </div>

                <!-- Información Input -->
                <div class="flex-1">
                    <input type="button" value="Información" class="w-full text-center bg-red-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-blue-700 cursor-pointer" onclick="">
                </div>

                <!-- Dispositivos Input -->
                <div class="flex-1">
                    <input type="button" value="Dispositivos" class="w-full text-center bg-red-600 text-white py-4 px-6 rounded-lg shadow-md hover:bg-purple-700 cursor-pointer" onclick="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
