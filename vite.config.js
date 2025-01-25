import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            valetTls: false,
        }),
    ],
    server: {
        host: '127.0.0.1',
        port: 3000,
        strictPort: true,
    },
});
