<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-white">

            <!-- Page Heading -->
            <header class="bg-[#141414] shadow ">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between border-b-[1px] border-[#555555]">
                    <img class="cursor-pointer" src="{{ asset('/images/audiophile.svg')}}"/>
                    <ul class="hidden flex-row text-white gap-6  md:flex">
                        <li class="uppercase cursor-pointer">Home</li>
                        <li class="uppercase cursor-pointer">HEADPHONES</li>
                        <li class="uppercase cursor-pointer">SPEAKERS</li>
                        <li class="uppercase cursor-pointer">EARPHONES</li>
                    </ul>
                 <div class="flex gap-4">
                    <button>
                        <img src="{{asset('images/cart.svg')}}"/>
                    </button>
                    <button class="bg-[#D87D4A] px-5 py-1 text-white">Login</button>
                 </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class=" ">
                @yield('content')
            </main>
        </div>
    </body>
</html>
