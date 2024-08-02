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

    <body data-topbar="dark">

        <div id="layout-wrapper">

            @include('partials/admin.header')

            @include('partials/admin.vertical-menu')

            <div class="main-content">

                <div class="page-content">
                    {{ $slot }}
                </div>
            
                @include('partials/admin.footer')
                
            </div>

        </div>

        @include('partials/admin.sidebar')

        <div class="rightbar-overlay"></div>

    </body>
</html>
