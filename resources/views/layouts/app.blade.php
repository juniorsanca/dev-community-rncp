<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <title>{{ config('app.name', 'Devbook') }}</title>
        <link rel="stylesheet" type="text/css" href="{{ url('/css/app.css') }}" />
       
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        
        @include('partials.header')

    </head>
    <body>
        <div id="app">
            @include('partials.navOut')
            @yield('content')
                <!-- Page Heading -->
                <header class="bg-white shadow">
                <div class="">
                    {{ $header ?? '' }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot ?? '' }}
            </main>
        </div>
    </body>
</html>