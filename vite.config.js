import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true, // Ensure that the manifest is being generated
    },
    resolve: {
        alias: {
            '@': '/resources/js', // This could be adjusted if needed
        },
    },
});
