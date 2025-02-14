import { defineConfig } from 'vite';
import autoprefixer from 'autoprefixer';
import tailwindcss from 'tailwindcss';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    css: {
        postcss: {
            plugins: [
                autoprefixer, tailwindcss
            ]
        }
    }
});
