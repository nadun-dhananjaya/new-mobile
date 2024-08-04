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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <x-livewire-alert::scripts />

        <div class="min-h-screen bg-white">

            <!-- Page Heading -->
            <header class="bg-[#141414] shadow ">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between border-b-[1px] border-[#555555]">
                  <a href="{{route('home')}}">
                    <img class="cursor-pointer"  src="{{ asset('/images/audiophile.svg')}}"/>
                  </a>
                    <ul class="hidden flex-row text-white gap-6  md:flex">
                        <a href="{{route('home')}}">
                            <li class="uppercase cursor-pointer">Home</li>
                        </a>
                        <a href="{{route('head-phones')}}">
                            <li class="uppercase cursor-pointer">HEADPHONES</li>
                        </a>
                        <a href="{{route('speakers')}}">
                            <li class="uppercase cursor-pointer">SPEAKERS</li>
                        </a>
                        <a href="{{route('ear-phones')}}">
                            <li class="uppercase cursor-pointer">EARPHONES</li>
                        </a>
                    </ul>
                 <div class="flex gap-4">
                    @if (Auth::user() != null)
                   <div class="flex items-center gap-3">
                    <a href="{{route('cart')}}">
                        <img src="{{asset('images/cart.svg')}}"/>
                    </a>
                    <a href="{{route('logout')}}">
                        <button class="bg-[#D87D4A] px-5 py-1 text-white">Logout</button>
                    </a>
                   </div>
                    @endif
                    @if (Auth::user() == null)
                    <a href="{{route('login')}}">
                        <button class="bg-[#D87D4A] px-5 py-1 text-white">Login</button>
                    </a>
                    @endif

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
