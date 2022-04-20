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

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body style="background-image: url('./images/header.png')" class="font-sans antialiased backdrop-blur-2xl" style="background-image: url('./images/background.jpg')">
        <x-jet-banner />

        <div class="min-h-screen">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header>
                    <div  class="w-full font-bold text-2xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <div class="container mx-auto flex justify-center text-gray-200">
                            {{ $header }}
                        </div>
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div class="py-12">
                    <div class="max-w-9xl mx-auto sm:px-6 lg:px-8">
                        <div class="lg:mx-0 mx-5 shadow-2xl overflow-hidden rounded-lg">
                            <div class="text-md text-gray-200 font-semibold px-3 lg:px mt-2">
                                {{$slot}}
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
