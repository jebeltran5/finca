<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <style>
            /* Tailwind CSS incluido */
            
        </style>
    
</head>
<body class="antialiased bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="text-center">
        <!-- Imagen -->
        <div class="mb-6">
            <x-application-logo class="w-20 h-20 text-blue-500" />
        </div> 
        
        <!-- Log in -->
        <a href="{{ route('login') }}" class="block mb-4 text-lg text-blue-600 hover:text-blue-800">
            ingresar
        </a>
        
        <!-- Register -->
        <a href="{{ route('register') }}" class="block text-lg text-blue-600 hover:text-blue-800">
            Registrar
        </a>
    </div>
</body>
</html>
