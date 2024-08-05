import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'public/css/jquery-jvectormap-1.2.2.css',
                'public/css/dataTables.bootstrap4.min.css',
                'public/css/responsive.bootstrap4.min.css',
                'public/css/bootstrap.min.css',
                'public/css/animate.min.css',
                'public/css/magnific-popup.css',
                'public/css/fontawesome-all.min.css',
                'public/css/slick.css',
                'public/css/default.css',
                'public/css/guest-style.css',
                'public/css/responsive.css',
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
                'public/js/isotope.pkgd.min.js',
                'public/js/imagesloaded.pkgd.min.js',
                'public/js/jquery.magnific-popup.min.js',
                'public/js/element-in-view.js',
                'public/js/slick.min.js',
                'public/js/ajax-form.js',
                'public/js/wow.min.js',
                'public/js/plugins.js',
                'public/js/guest-scripts.js',
                'public/js/admin-app.js',
                'public/pages/js/dashboard.init.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
