<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Ikigai') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts --> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap"
         rel="stylesheet"/>
    
        <script src="https://cdn.tailwindcss.com"></script>
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-[poppins] text-black-900 antialiased">
    
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-pink-500 to-violet-500">
        <div class="items-center">
                <a href="/">
                <img src="{{ asset('storage/images/logo.png') }}" class="h-20 w-23 ustify-content : center;  animate-bounce" />
                </a> 
            </div>
            <div>
            <h1 class="text-3xl text-white leading-normal 6py-">真の友達を見つけよう</h1>
            </div>
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white  shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
