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

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        
        <!-- Scripts -->
        @vite([
            'public/css/jquery-jvectormap-1.2.2.css',
            'public/css/dataTables.bootstrap4.min.css',
            'public/css/responsive.bootstrap4.min.css',
            'public/css/bootstrap.min.css',
            'public/css/icons.min.css',
            'public/css/admin-app.min.css',
            'resources/css/app.css',
            
            'public/js/bootstrap.bundle.min.js',
            'public/js/metisMenu.min.js',
            'public/js/simplebar.min.js',
            'public/js/waves.min.js',
            'public/js/apexcharts.min.js',
            'public/js/jquery-jvectormap-1.2.2.min.js',
            'public/js/jquery-jvectormap-us-merc-en.js',
            'public/js/jquery.dataTables.min.js',
            'public/js/dataTables.bootstrap4.min.js',
            'public/js/responsive.bootstrap4.min.js',
            'public/pages/js/dashboard.init.js',
            'public/js/admin-app.js',
            'resources/js/app.js',
        ])

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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script type="text/javascript">
        
            @if(Session::has('notification'))
            
                var notification = @json(Session::get('notification'));
                var type = notification['alert-type'];
                var message = notification['message'];
    
                switch(type) {
                    case 'info':
                        toastr.info(message);
                        break;
                    case 'success':
                        toastr.success(message);
                        break;
                    case 'warning':
                        toastr.warning(message);
                        break;
                    case 'error':
                        toastr.error(message);
                        break;
                }
            @endif
        </script>
    </body>
</html>
