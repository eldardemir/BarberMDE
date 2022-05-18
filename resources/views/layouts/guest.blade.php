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
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body style="background-image: url('../images/header.png')" class="font-sans antialiased backdrop-blur-2xl" style="background-image: url('./images/background.jpg')">
        <x-jet-banner />

        <div class="min-h-screen">
                       <main>
                <div>
                    <div class="lg:mx-0 mx-5 overflow-hidden rounded-lg">
                        <div class="text-md text-gray-200 font-semibold px-3 lg:px mt-2">
                            {{$slot}}
                        </div>
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>


