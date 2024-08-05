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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        
        <!-- Scripts -->
        @vite([
            'public/css/bootstrap.min.css',
            'public/css/animate.min.css',
            'public/css/magnific-popup.css',
            'public/css/fontawesome-all.min.css',
            'public/css/slick.css',
            'public/css/default.css',
            'public/css/guest-style.css',
            'public/css/responsive.css',
            
            'public/js/bootstrap.bundle.min.js',
            'public/js/isotope.pkgd.min.js',
            'public/js/imagesloaded.pkgd.min.js',
            'public/js/jquery.magnific-popup.min.js',
            'public/js/element-in-view.js',
            'public/js/slick.min.js',
            'public/js/ajax-form.js',
            'public/js/wow.min.js',
            'public/js/plugins.js',
            'public/js/guest-scripts.js',
        ])

    </head>
    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        @include('partials/guest.header')

        <main>
            {{ $slot }}
        </main>

        @include('partials/admin.footer')

    </body>
</html>
