<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div class="min-h-screen bg-cloud-gray font-sans text-gray-900 flex flex-col sm:justify-center items-center p-2">

            <div>
                <img src="{{ asset('/images/logo-blanco.png')}}" alt="Il Piatto" style="width:164px;">
            </div>

            <div class="p-6">
                @if (Route::has('login'))
                    <div class="sm:block">
                        @auth
                            <x-button class="ml-3">
                                <a href='/dashboard'>
                                    {{ __('Dashboard') }}
                                </a>
                            </x-button>       
                        @else
                            <x-button class="ml-3">
                                <a href='/login'>
                                    {{ __('Iniciar Sesión') }}
                                </a>
                            </x-button>   
                            @if (Route::has('register'))
                                <x-button class="ml-3">
                                    <a href='/register'>
                                        {{ __('Registrarse') }}
                                    </a>
                                </x-button> 
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
