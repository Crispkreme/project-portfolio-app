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
        @vite([

            'public/css/bootstrap.min.css',
            'public/css/icons.min.css',
            'public/css/admin-app.min.css',
            'resources/css/app.css',
            
            'public/js/jquery.min.js',
            'public/js/bootstrap.bundle.min.js',
            'public/js/metisMenu.min.js',
            'public/js/simplebar.min.js',
            'public/js/waves.min.js',
            'public/js/admin-app.js',
            'resources/js/app.js',
    
        ])

    </head>

    <body class="auth-body-bg">

        <div class="bg-overlay"></div>
        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
