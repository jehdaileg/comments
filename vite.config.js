import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'
import  laravel  from 'vite-plugin-laravel'
import path from 'path';

export default defineConfig({

    resolve: {
        alias: {
            '~' : path.resolve(__dirname, 'resources/scripts')
        }
    },

    publicDir: '',

    build: {
        manifest: true,
        outDir: 'public/build',
        rollupOptions: {
            input: "resources/scripts/main.js"
        }
    },

	plugins: [
		vue(),
		laravel()
	]
})
