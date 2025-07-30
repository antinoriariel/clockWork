import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'resources/views/**/*.blade.php', // recarga al modificar vistas
                'resources/js/**/*.js',           // recarga al modificar scripts
                'resources/css/**/*.css',         // recarga al modificar estilos
                'app/Http/Livewire/**',           // opcional, para Livewire
            ],
        }),
        tailwindcss(),
    ],
});

