<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Socialite - Main</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        
        @vite(['resources/css/app.css','resources/js/app.js'])

    </head>
    <body class="bg-black">
        <!-- Navbar -->
        <nav class="bg-black p-4">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <a href="#" class="text-white text-xl font-bold">El Rincon de Isma</a>
                    <ul class="flex space-x-4">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">About</a></li>
                        <li><a href="#" class="text-white">Services</a></li>
                        <li><a href="#" class="text-white">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <!-- Body -->
        <div class="container mx-auto p-4 mt-4 text-white">
            <h1 class="text-2xl font-bold text-center">Welcome to El Rincon de Isma</h1>
            <!-- Tarjetas -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                @foreach ($providers as $provider)
                {{-- CARD PROVIDER    --}}
                <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:border-gray-700">
                    <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                        Connect to {{ $provider->name }}
                    </h5>
                    <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Connect with google provider.</p>
                    <ul class="my-4 space-y-3">
                        <li>
                            <a href="/{{ $provider->slug }}/redirect" class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
                                {!! $provider->svg !!}
                                <span class="flex-1 ml-3 whitespace-nowrap">{{ $provider->name }} SSO</span>
                                <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">Popular</span>
                            </a>
                        </li>
                       
                    </ul>                    
                </div>
                {{-- END CARD PROVIDER --}}
                @endforeach
                

            </div>
        </div>
    </body>
</html>
