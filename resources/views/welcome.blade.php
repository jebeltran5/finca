<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <style>
            /* Tailwind CSS incluido */
            @import url('https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css');
        </style>
    </head>
    <body class="antialiased bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="text-center">
            <!-- Log in -->
            <a href="{{ route('login') }}" class="block mb-4 text-lg text-blue-600 hover:text-blue-800">
                Log in
            </a>
            <!-- Register -->
            <a href="{{ route('register') }}" class="block text-lg text-blue-600 hover:text-blue-800">
                Register
            </a>
        </div>
    </body>
</html>
