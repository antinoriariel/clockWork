import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

const localIp = '192.168.5.100'; // Tu IP local

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: [
        'resources/views/**/*.blade.php',
        'resources/js/**/*.js',
        'resources/css/**/*.css',
        'app/Http/Livewire/**',
      ],
    }),
    tailwindcss(),
  ],
  server: {
    host: '0.0.0.0',
    port: 5173,
    strictPort: true,
    hmr: {
      host: localIp,
      protocol: 'ws',
      port: 5173,
    },
  },
});
