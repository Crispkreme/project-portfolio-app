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
            ],
            refresh: true,
        }),
    ],
});
