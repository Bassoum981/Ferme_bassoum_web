import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import { bunny } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd(), '');
    const ngrokHost = (env.NGROK_HOST || '').replace(/^https?:\/\//, '').replace(/\/$/, '');
    const devServerUrl = (env.VITE_DEV_SERVER_URL || '').replace(/\/$/, '');

    return {
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
                fonts: [
                    bunny('Instrument Sans', {
                        weights: [400, 500, 600],
                    }),
                ],
            }),
            tailwindcss(),
        ],
        server: {
            host: '0.0.0.0',
            cors: true,
            allowedHosts: true,
            origin: devServerUrl || undefined,
            hmr: ngrokHost
                ? {
                      protocol: 'wss',
                      host: ngrokHost,
                      clientPort: 443,
                  }
                : true,
            watch: {
                ignored: ['**/storage/framework/views/**'],
            },
        },
    };
});
